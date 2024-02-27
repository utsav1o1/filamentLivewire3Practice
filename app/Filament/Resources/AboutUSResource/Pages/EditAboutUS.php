<?php

namespace App\Filament\Resources\AboutUSResource\Pages;

use App\Filament\Resources\AboutUSResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutUS extends EditRecord
{
    protected static string $resource = AboutUSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
