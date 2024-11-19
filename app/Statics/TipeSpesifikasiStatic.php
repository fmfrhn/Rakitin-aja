<?php 

namespace App\Statics;

class TipeSpesifikasiStatic{
    const high = 'HIGH_END';
    const mid = 'MID_END';
    const low = 'LOW_END';

    public static function options(): array {
        return [
            self::high => 'HIGH END',
            self::mid => 'MID END',
            self::low => 'LOW END',
        ];
    }
}

