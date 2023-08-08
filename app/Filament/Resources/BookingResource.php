<?php

namespace App\Filament\Resources;

use Closure;
use DateTime;
use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use App\Models\Studio;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
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

    protected static ?string $navigationIcon = 'heroicon-o-folder';
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
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state){
                                $selected = Studio::find($state);
                                $harga = $selected ? $selected->harga : null;
                                $set('hrg', $harga);
                            })
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
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state, $get){
                                $harga = $get('hrg');
                                $total = $harga * $state;
                                $set('harga', $total);
                            })
                            ->numeric(),
                        TimePicker::make('start')
                            ->label('Waktu Mulai')
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state, $get){
                                $startTime = DateTime::createFromFormat('Y-m-d H:i:s', $state);
                                $durasi = (int) $get('durasi');
                                $endTime = clone $startTime;
                                $endTime->modify("+" . $durasi . "hours");

                                $endTimeStr = $endTime->format('Y-m-d H:i:s');

                                $set('finish', $endTimeStr);
                            })
                            ->required(),
                        TimePicker::make('finish')
                            ->label('Waktu Selesai')
                            ->required(),
                        TextInput::make('hrg')
                            ->label('Harga/Studio')
                            ->required(),
                        TextInput::make('harga')
                            ->label('Total Harga')
                            ->disabled(),
                        FileUpload::make('bukti_pembayaran')
                            ->label('Bukti pembayaran'),
                        Select::make('status')
                            ->options([
                                'Belum Dibayar' => 'Belum Dibayar',
                                'Sudah Dibayar' => 'Sudah Dibayar',
                                'Canceled' => 'Canceled',
                                'Waiting' => 'Waiting',
                                'Digunakan' => 'Digunakan',
                                'Selesai' => 'Selesai',
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
                TextColumn::make('start'),
                TextColumn::make('finish'),
                TextColumn::make('durasi'),
                ImageColumn::make('bukti_pembayaran'),
                SelectColumn::make('status')
                    ->options([
                        'Belum Dibayar' => 'Belum Dibayar',
                        'Sudah Dibayar' => 'Sudah Dibayar',
                        'Canceled' => 'Canceled',
                        'Waiting' => 'Waiting',
                        'Digunakan' => 'Digunakan',
                        'Selesai' => 'Selesai',
                    ])
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
            ]);
    }
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
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
