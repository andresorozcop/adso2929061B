<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UsersExport implements FromView, WithColumnWidths, WithEvents, WithStyles
{
    public function view(): View
    {
        return view('users.excel', [
            'users' => User::all(),
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 30,
            'C' => 35,
            'D' => 15,
            'E' => 24,
            'F' => 20,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $highestRow = $sheet->getHighestRow();
                $highestColumn = $sheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    if (($row - 2) % 2 === 1) {
                        $sheet->getStyle('A'.$row.':'.$highestColumn.$row)->applyFromArray([
                            'fill' => [
                                'fillType' => Fill::FILL_SOLID,
                                'startColor' => ['rgb' => 'F5F5F5'],
                            ],
                        ]);
                    }
                }
            },
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true, 'size' => 16]],
        ];
    }
}
