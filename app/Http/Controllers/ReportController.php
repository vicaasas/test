<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function total(){

        return view('admin.report.total',
        [
            'personal_data' => 
                Student::select(Student::raw('class_name,tassel_and_shawl_color,count(tassel_and_shawl_color) as total'))
                ->whereNotNull('tassel_and_shawl_color')
                ->groupBy('class_name')
                ->get(),
            'color' => 
                Student::select('tassel_and_shawl_color')
                ->distinct()
                ->whereNotNull('tassel_and_shawl_color')
                ->get(),
            'color_2' => 
                Student::select('tassel_and_shawl_color')
                ->distinct()
                ->whereNotNull('tassel_and_shawl_color')
                ->get(),
            'personal_master_data' => 
                Student::select(Student::raw('class_name,scarf_color,count(scarf_color) as total'))
                ->whereNotNull('scarf_color')
                ->groupBy('class_name')
                ->get(),
            'color_master' => 
                Student::select('scarf_color')
                ->distinct()
                ->whereNotNull('scarf_color')
                ->get(),
            'color_master_2' => 
                Student::select('scarf_color')
                ->distinct()
                ->whereNotNull('scarf_color')
                ->get(),
        ]);
    }
    public function not_return(){
        return view('admin.report.not_return');
    }
}
