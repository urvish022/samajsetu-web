<?php

namespace Database\Seeders;

use App\Models\MemberDetail;
use App\Models\User;
use App\Traits\UtilTrait;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder
{
    use UtilTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $members = MemberDetail::get();
        foreach($members as $member){
            if($member->mem_active_flag == 1 && $member->approval_flag == 1){

                if(!empty($member->user_name) || !empty($member->email_id)){

                    $user_name = !empty($member->user_name) ? $member->user_name : $member->email_id;
                    if($user_name != "NA"){
                        User::updateOrCreate(
                            [
                                'email' => strtolower($member->email_id)
                            ],
                            [
                                'member_id' => $member->member_id,
                                'name' => $member->full_name_eng,
                                'email' => strtolower($member->email_id),
                                'username' => strtolower($user_name),
                                'password' => Hash::make($this->my_simple_crypt($member->password,'d')),
                            ]
                        );
                    }
                }
                
            }
            
        }
    }
}
