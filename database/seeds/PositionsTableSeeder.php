<?php

use App\Position;
use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the positions table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('positions')->truncate();

        $presiden_direktur = new Position;
        $presiden_direktur->name = 'Presiden Direktur';
        $presiden_direktur->parent_id = null;
        $presiden_direktur->save();

        $direktur = new Position;
        $direktur->name = 'Direktur';
        $direktur->parent_id = $presiden_direktur->id;
        $direktur->save();

        $hr_manager = new Position;
        $hr_manager->name = 'HR Manager';
        $hr_manager->parent_id = $direktur->id;
        $hr_manager->save();

        $finance_manager = new Position;
        $finance_manager->name = 'Finance Manager';
        $finance_manager->parent_id = $direktur->id;
        $finance_manager->save();

        $operation_manager = new Position;
        $operation_manager->name = 'Operation Manager';
        $operation_manager->parent_id = $direktur->id;
        $operation_manager->save();

        $sales_manager = new Position;
        $sales_manager->name = 'Sales Manager';
        $sales_manager->parent_id = $direktur->id;
        $sales_manager->save();

        $network_manager = new Position;
        $network_manager->name = 'Network Manager';
        $network_manager->parent_id = $operation_manager->id;
        $network_manager->save();

        $application_manager = new Position;
        $application_manager->name = 'Application Manager';
        $application_manager->parent_id = $operation_manager->id;
        $application_manager->save();

        $sales_superviser = new Position;
        $sales_superviser->name = 'Sales Superviser';
        $sales_superviser->parent_id = $sales_manager->id;
        $sales_superviser->save();

        // staff
        $hr_staff = new Position;
        $hr_staff->name = 'Staff HR';
        $hr_staff->parent_id = $hr_manager->id;
        $hr_staff->save();

        $finance_staff = new Position;
        $finance_staff->name = 'Staff Finance';
        $finance_staff->parent_id = $finance_manager->id;
        $finance_staff->save();

        $network_staff = new Position;
        $network_staff->name = 'Staff Network';
        $network_staff->parent_id = $network_manager->id;
        $network_staff->save();

        $application_staff = new Position;
        $application_staff->name = 'Staff Application';
        $application_staff->parent_id = $application_manager->id;
        $application_staff->save();

        $sales_staff = new Position;
        $sales_staff->name = 'Staff Sales';
        $sales_staff->parent_id = $sales_superviser->id;
        $sales_staff->save();
    }
}
