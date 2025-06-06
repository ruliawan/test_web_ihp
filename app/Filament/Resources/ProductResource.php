<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\Category;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Filters\SelectFilter;

class ProductResource extends Resource
{
    // Menentukan model apa yang diwakili oleh resource ini
    protected static ?string $model = Product::class;

    // Icon di sidebar admin untuk resource ini (pakai ikon heroicon)
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Menentukan tampilan form untuk membuat atau mengedit produk
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk nama produk
                TextInput::make('product_name')
                    ->label('Nama Produk')
                    ->required(),

                // Dropdown untuk memilih kategori
                Select::make('idcategories')
                    ->label('Kategori')
                    ->options(Category::all()->pluck('category_name', 'idcategories')),

                // Input angka untuk harga
                TextInput::make('price')
                    ->label('Harga')
                    ->numeric(),

                // Input angka untuk stok
                TextInput::make('stock')
                    ->label('Stok')
                    ->numeric()
            ]);
    }

    /**
     * Menentukan tampilan tabel (list data produk) di panel admin
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom untuk nama produk, bisa dicari
                TextColumn::make('product_name')
                    ->label('Nama Produk')
                    ->searchable(),

                // Kolom untuk nama kategori (relasi ke tabel kategori)
                TextColumn::make('category.category_name')
                    ->label('Kategori'),

                // Kolom harga
                TextColumn::make('price')
                    ->label('Harga')
                    ->numeric(),

                // Kolom stok
                TextColumn::make('stock')
                    ->label('Stok')
                    ->numeric()
            ])
            ->filters([
                // Filter berdasarkan kategori
                SelectFilter::make('idcategories')
                    ->relationship('category', 'category_name')
                    ->label('Kategori')
            ])
            ->actions([
                // Tombol edit dan delete di setiap baris
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                // Aksi massal (misal: hapus banyak produk sekaligus)
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    /**
     * Query builder default yang digunakan saat menampilkan tabel.
     * Di sini kita pastikan relasi `category` ikut dimuat agar tidak boros query (lazy load).
     */
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('category');
    }

    /**
     * Jika produk punya relasi lain (seperti review, image, dll), bisa ditampilkan di detail halaman
     */
    public static function getRelations(): array
    {
        return [
            // Kosong untuk saat ini
        ];
    }

    /**
     * Menentukan halaman-halaman yang digunakan untuk resource ini
     * (list, tambah baru, dan edit)
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'), // Halaman daftar produk
            'create' => Pages\CreateProduct::route('/create'), // Halaman tambah produk
            'edit' => Pages\EditProduct::route('/{record}/edit'), // Halaman edit produk
        ];
    }
}
