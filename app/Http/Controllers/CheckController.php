<?php

namespace App\Http\Controllers;

use App\Models\Check;
use App\Models\Check_information;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    private $data = [
        ['إكصدامات أمامي وخلفي', 'front_back_bumpers'],
        ['مرايات جاننبية', 'side_mirror'],
        ['كبوت', 'hood'],
        ['ميكانزم المريات', 'mirror_mechanism'],
        ['سقف', 'roof'],
        ['زجاج أمامي وخلفي وأبواب', 'front_back_doors_mirror'],
        ['رفارف', 'fenders'],
        ['سنتر لوك / إنذار', 'alert'],
        ['أبواب', 'doors'],
        ['مراوح التبريد والبلاور', 'cooling_fans_blowers'],
        ['كوالين ابواب وشنطة', 'brakes_condition'],
        ['علبة الفيوزات', 'door_trunk_locks'],
        ['شنطة', 'bag'],
        ['إطار أمامي شمال (حالة النقشة - تاريخ الإنتاج - حالة الجنط)', 'front_tire_north'],
        ['عتب', 'reproach'],
        ['إطار أمامي يمين (حالة النقشة - تاريخ الإنتاج - حالة الجنط)', 'front_tire_right'],
        ['دهانات (دوكو ظاهرى)', 'paints'],
        ['إطار خلفي شمال (حالة النقشة - تاريخ الإنتاج - حالة الجنط)', 'back_tire_north'],
        ['فوانيس أمامي وخلفي وإشارة', 'front_back_lights_signal'],
        ['إطار خلفي يمين (حالة النقشة - تاريخ الإنتاج - حالة الجنط)', 'back_tire_right'],
        ['إضاءة خارجية', 'outdoor_lighting'],
        ['إطار إستبن (حالة النقشة - تاريخ الإنتاج - حالة الجنط)', 'spare_tire'],
        ['زيوت / سوائل', 'oils_liquids'],
        ['تيل + ديسكات فرامل أمامي وخلفي', 'front_back_brake_pads_and_discs'],
        ['بوجيهات', 'spark_plugs'],
        ['مستوي فرامل اليد', 'handbrake_level'],
        ['سيور', 'belts'],
        ['عفشة', 'furniture'],
        ['فلتر هواء / تكييف', 'air_filter_and_conditioning'],
        ['قواعد محرك', 'engine_rules'],
        ['شكمان', 'muffler'],
        ['شاسيه ( ظاهرى)', 'apparent_chassis'],
        ['فرش', 'furnishing'],
        ['التكييف', 'air_conditioning'],
        ['تابلوه', 'tableau'],
        ['الولاعة', 'lighter'],
        ['لمبات إنذار بلوحة العدادات', 'dashboard_warning_lights'],
        ['إنفجار الإيرباج', 'airbag_explosion'],
        ['عدادات', 'counters'],
        ['فرش السقف', 'ceiling_furnishing'],
        ['كاسيت وسماعات', 'cassette_headphones'],
        ['فتحة سقف', 'sunroof'],
        ['إضاءة داخلية', 'interior_lighting'],
        ['زجاج كهرباء', 'electric_glass'],
        ['تكييف', 'auto_air_conditioning'],
        ['كبس موتور (Bar)', 'motor_press_bar'],
        ['بطارية + دينامو', 'battery_dynamo'],
        ['الزوايا ( مرفق تقرير الجهاز )', 'angles'],
    ];
    public function index()
    {
        $checks = Check::get();
        return view('checks.index', ['checks' => $checks]);
    }
    public function create()
    {
        return view('checks.create');
    }
    public function store(Request $request)
    {
        $check = new Check();
        $check->date = $request['date'];
        $check->branch = $request['branch'];
        $check->entrance = $request['entrance'];
        $check->category =  $request['category'];
        $check->exit = $request['exit'];
        $check->supervisor_name = $request['supervisor_name'];
        $check->customer_name = $request['customer_name'];
        $check->phone_no = $request['phone_no'];
        $check->vehicle_model_and_type = $request['vehicle_model_and_type'];
        $check->manufacturing_year = $request['manufacturing_year'];
        $check->vehicle_number = $request['vehicle_number'];
        $check->kilometers = $request['kilometers'];
        $check->chassis_no = $request['chassis_no'];
        $check->engine_no = $request['engine_no'];
        $check->car_color = $request['car_color'];
        $check->cc_capacity = $request['cc_capacity'];
        $check->transmission = $request['transmission'];
        $check->additional_notes = $request['additional_notes'];

        $check->save();

        foreach ($this->data as $item_information){
            $check_information = new Check_information();
            $check_information->check_id = $check->id;
            $check_information->item = $item_information[0];
            if ($request[$item_information[1] . '_fit'] == 1) {
                $check_information->fit = 1;
                $check_information->unfit = 0;
            } else {
                $check_information->fit = 0;
                $check_information->unfit = 1;
            }
            $check_information->note = $request[$item_information[1] . '_note'];
            $check_information->save();
        }
        return to_route('checks.index');

    }
    public function edit()
    {
        return view('checks.create');
    }
    public function update()
    {
        return view('checks.create');
    }
    public function show($check)
    {
        $check = Check::find($check);
        $check_info = Check_information::where('check_id', $check->id)->get();
        return view('checks.show', ['check' => $check, 'check_info' => $check_info]);
    }
    public function destroy($check)
    {
        $check = Check::find($check);

        $check->delete();
        return to_route('checks.index');
    }
}
