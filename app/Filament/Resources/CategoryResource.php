<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class CategoryResource extends Resource
{
    // Menghubungkan resource ini dengan model Category
    protected static ?string $model = Category::class;

    // Ikon yang ditampilkan di menu sidebar admin
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Menentukan form input yang digunakan untuk membuat atau mengedit kategori
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input teks untuk nama kategori
                TextInput::make('category_name')
                    ->label('Kategori'),
            ]);
    }

    /**
     * Menentukan tampilan tabel daftar kategori
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom teks untuk menampilkan nama kategori
                TextColumn::make('category_name')
                    ->label('Kategori')
            ])
            ->filters([
                // Filter untuk hanya menampilkan data kategori yang tidak kosong
                Filter::make('category_name')
                    ->query(fn (Builder $query): Builder =>
                        $query->whereNotNull('category_name')
                    )
            ])
            ->actions([
                // Aksi edit dan hapus per baris data
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                // Aksi untuk menghapus banyak data sekaligus
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    /**
     * Menampilkan relasi yang ingin disertakan (belum ada dalam kasus ini)
     */
    public static function getRelations(): array
    {
        return [
            // Kosong, belum ada relasi ditampilkan di halaman ini
        ];
    }

    /**
     * Menentukan halaman-halaman yang bisa diakses untuk resource kategori
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'), // Halaman daftar semua kategori
            'create' => Pages\CreateCategory::route('/create'), // Halaman tambah kategori
            'edit' => Pages\EditCategory::route('/{record}/edit'), // Halaman edit kategori
        ];
    }
}
