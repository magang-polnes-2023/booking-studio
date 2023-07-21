<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BookingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BookingResource\RelationManagers;


class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static function getNavigationLabel(): string
    {
        return "Booking";
    }

    public static function getPluralLabel(): string
    {
        return "Booking";
    }
    protected static ?string $navigationGroup = 'Booking';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('studio_id')
                            ->label('Studio')
                            ->relationship('studio', 'nama_studio')
                            ->required(),
                        Select::make('user_id')
                            ->label('Nama User')
                            ->relationship('user', 'name')
                            ->required(),
                        TextInput::make('no_telpon')
                            ->label('Nomor Telpon')
                            ->required()
                            ->numeric(),
                        DatePicker::make('tanggal')
                            ->label('Tanggal Booking')
                            ->required(),
                        TextInput::make('durasi')
                            ->label('Durasi Booking (/jam)')
                            ->required()
                            ->numeric(),
                        TimePicker::make('start')
                            ->label('Waktu Mulai')
                            ->required(),
                        TimePicker::make('finish')
                            ->label('Waktu Selesai')
                            ->required(),
                        FileUpload::make('bukti_pembayaran')
                            ->label('Bukti pembayaran'),
                        Select::make('status')
                            ->options([
                                'belum dibayar' => 'Belum Dibayar',
                                'sudah dibayar' => 'Sudah Dibayar',
                            ]),
                        ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('studio.nama_studio')
                    ->searchable(),
                TextColumn::make('user.name')
                    ->searchable(),
                TextColumn::make('tanggal'),
                TextColumn::make('durasi'),
                ImageColumn::make('bukti_pembayaran'),
                SelectColumn::make('status')
                    ->options([
                        'belum dibayar' => 'Belum Dibayar',
                        'sudah dibayar' => 'Sudah Dibayar',
                    ])
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }    
}