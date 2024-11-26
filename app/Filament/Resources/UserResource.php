<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Hash;
use Filament\Resources\Pages\Page; 
use App\Models\Sucursal;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    //protected static bool $shouldRegisterNavigation = false; // Ocultar en el panel

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Nombre'),
                    
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Correo Electrónico')
                    ->unique(User::class, 'email', ignoreRecord: true), // Ignorar el email actual en la validación de unicidad

                // Campo para la contraseña, opcional al editar
                TextInput::make('password')
                    ->password()
                    ->label('Contraseña')
                    ->minLength(8)
                    ->dehydrateStateUsing(fn ($state) => $state ? Hash::make($state) : null) // Encriptar solo si se ingresa una nueva contraseña
                    ->required(fn ($record) => $record === null) // Solo requerido al crear un nuevo usuario
                    ->dehydrated(fn ($state) => filled($state)), // Solo se guarda si hay algún valor

                Select::make('role')
                    ->label('Rol')
                    ->relationship('roles', 'name')
                    ->options(Role::all()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),


                    CheckboxList::make('sucursales') // Campo para seleccionar sucursales
                    ->label('Sucursales')
                    ->relationship('sucursales', 'nombre') // Asegúrate de que 'nombre' sea el campo correcto
                    ->options(Sucursal::all()->pluck('nombre', 'id'))
                    ->columns(2),

                CheckboxList::make('permissions')
                    ->label('Permisos')
                    ->relationship('permissions', 'name')
                    ->options(Permission::all()->pluck('name', 'id'))
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nombre'),
                TextColumn::make('email')->label('Correo Electrónico'),

                TextColumn::make('roles.name')
                    ->label('Rol Asignado')
                    ->sortable()
                    ->searchable(),
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
        return [];
    }

    public static function boot()
    {
        parent::boot();

        // Aplicar middleware a las páginas
        Page::middleware(['web', 'can:view-users']);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    
}
