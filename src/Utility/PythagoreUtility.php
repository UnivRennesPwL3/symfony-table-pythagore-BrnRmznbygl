<?php

namespace App\Utility;
class PythagoreUtility
{
    public function display(int $size = 10): string
    {
        $html = '<table border="1" cellpadding="5" cellspacing="0">';
        for ($i = 1; $i <= $size; $i++) {
            $html .= '<tr>';
            for ($j = 1; $j <= $size; $j++) {
                $html .= '<td>' . ($i * $j) . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        return $html;
    }
}