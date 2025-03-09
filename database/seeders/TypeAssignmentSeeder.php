<?php

namespace Database\Seeders;

use App\Models\TypeAssignment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeAssignmentSeeder extends Seeder
{
    public function run()
    {
        $assignments = [
            ['type_assignments_type' => 'Category', 'type_assignments_id' => 1, 'type_id' => 1, 'my_bonus_field' => 'Bonus 1'],
            ['type_assignments_type' => 'Category', 'type_assignments_id' => 2, 'type_id' => 2, 'my_bonus_field' => 'Bonus 2']
        ];

        foreach ($assignments as $assignment) {
            TypeAssignment::create($assignment);
        }
    }
}
