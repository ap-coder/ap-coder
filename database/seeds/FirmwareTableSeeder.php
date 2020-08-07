<?php

use Illuminate\Database\Seeder;

class FirmwareTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('firmware')->delete();
        
        \DB::table('firmware')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'CR2700 Firmware',
                'description' => '<p>New to 1.2.6: refer to the readme file.</p><p>CR2700 System Install Firmware.</p>',
                'firmware_version' => '1.2.6',
                'published' => 1,
                'slug' => 'cr2700-firmware',
                'created_at' => '2020-06-22 18:59:33',
                'updated_at' => '2020-07-02 18:22:51',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'CRA-A271 Firmware',
                'description' => '<p>New to 1.3.4: refer to readme file.</p><p>Bluetooth Inductive Charging Station CRA-A271 System Install Firmware. Note: Download CortexTools2® to install firmware and configuration files to your Bluetooth Inductive Charging Station.</p>',
                'firmware_version' => '1.3.4',
                'published' => 1,
                'slug' => 'cra-a271-firmware',
                'created_at' => '2020-06-22 19:02:54',
                'updated_at' => '2020-07-02 18:23:48',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'CRA-BTDG27 Bluetooth Dongle Firmware',
                'description' => '<p>Bluetooth Dongle CRA-BTDG27 System Install Firmware. Note: Download CortexTools2® to install firmware and configuration files to your Bluetooth Dongle. Files within the firmware zip files should not be renamed. Save files as-is. Read the Installing Firmware</p>',
                'firmware_version' => '1.3.4',
                'published' => 1,
                'slug' => 'cra-btdg27-bluetooth-dongle-firmware',
                'created_at' => '2020-06-22 19:04:48',
                'updated_at' => '2020-07-06 22:03:23',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'CR1100 Firmware',
                'description' => '<p>See firmware Read Me file for firmware changes.</p>',
                'firmware_version' => '1.3.5',
                'published' => 1,
                'slug' => 'cr1100-firmware',
                'created_at' => '2020-06-22 19:08:42',
                'updated_at' => '2020-07-06 23:12:21',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'CortexTools2',
                'description' => '<p>See the readme file for information on this version</p>',
                'firmware_version' => '1.4.3.18',
                'published' => 1,
                'slug' => 'cortextools2',
                'created_at' => '2020-06-25 21:25:38',
                'updated_at' => '2020-07-06 23:15:39',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'CR1500 Firmware',
                'description' => '<p>Release CR1500 and firmware version 1.6.5</p>',
                'firmware_version' => '1.6.5',
                'published' => 1,
                'slug' => 'cr1500-firmware',
                'created_at' => '2020-06-25 21:30:51',
                'updated_at' => '2020-07-08 15:20:49',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'CR1500 DPM Firmware',
                'description' => '<p>Release CR1500DPM firmware version 1.6.5</p>',
                'firmware_version' => '1.6.5',
                'published' => 1,
                'slug' => 'cr1500-dpm-firmware',
                'created_at' => '2020-06-25 21:31:33',
                'updated_at' => '2020-07-08 15:21:27',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'CR950 Firmware',
                'description' => '<p>CR950 System Install Firmware</p><p>New to 2.2.1: Refer to Readme file</p>',
                'firmware_version' => '2.2.1',
                'published' => 1,
                'slug' => 'cr950-firmware',
                'created_at' => '2020-06-25 21:33:50',
                'updated_at' => '2020-07-08 20:04:42',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'CR5000 Firmware',
                'description' => '<p>CR5000 System Install Firmware. Note: Download CortexTools® to download firmware and configuration files to your CR5000. Files within the firmware zip files should not be renamed. Save files as is. Read the Installing Firmware Instructions for more inform</p><p>New to 1294: Refer to Readme file</p>',
                'firmware_version' => '1.2.9.4',
                'published' => 1,
                'slug' => 'cr5000-firmware',
                'created_at' => '2020-06-25 21:36:02',
                'updated_at' => '2020-07-08 22:23:27',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'CR8200 Firmware',
                'description' => '<p>New to 1.16.0: refer to the readme file.</p>',
                'firmware_version' => '1.16.0',
                'published' => 1,
                'slug' => 'cr8200-firmware',
                'created_at' => '2020-06-25 21:37:45',
                'updated_at' => '2020-07-09 19:47:14',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'CR2600 Firmware',
                'description' => '<p>CR2600 System Install Firmware. Note: Download CortexTools® to download firmware and configuration files to your CR2600. Files within the firmware zip files should not be renamed. Save files as is. Read the Installing Firmware Instructions for more information.</p><p>New to 1306: Refer to readme file.</p>',
                'firmware_version' => '1.3.0.6',
                'published' => 1,
                'slug' => 'cr2600-firmware',
                'created_at' => '2020-06-25 21:40:12',
                'updated_at' => '2020-07-09 22:37:27',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'T500 Cable Firmware',
                'description' => '<p>Note: Download CortexTools® to download firmware and configuration files to your T500. Files within the firmware zip files should not be renamed. Save files as is. Read the Installing Firmware Instructions for more information.</p><p>T500 System Install Firmware v5.0.4.0</p>',
                'firmware_version' => '5.0.4.0',
                'published' => 1,
                'slug' => 't500-cable-firmware',
                'created_at' => '2020-06-25 21:42:52',
                'updated_at' => '2020-07-09 22:37:56',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            12 => 
            array (
                'id' => 14,
            'name' => 'A104 / A111 Charging Station with Embedded Modem (V2)',
                'description' => '<p>New to 2424: Added support for improved international language. Added support for VCOM mode.</p><p>Charging Station with Embedded Modem System Install Firmware. Note: Download CortexTools™ to download firmware and configuration files to your Charging Station with Embedded Modem.</p>',
                'firmware_version' => '2.4.2.4',
                'published' => 1,
                'slug' => 'a104-a111-charging-station-with-embedded-modem-v2',
                'created_at' => '2020-06-25 21:46:03',
                'updated_at' => '2020-07-09 22:38:58',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            13 => 
            array (
                'id' => 15,
            'name' => 'A104 / A111 Charging Station with Embedded Modem (V1)',
                'description' => '<p>REV 1 MODEM ONLY. New to 2224: Added support for improved international language. Added support for VCOM mode.</p><p>Charging Station Modem System Install Firmware. Note: Download CortexTools™ to download firmware and configuration files to your Charging Station with Embedded Modem.</p>',
                'firmware_version' => '2.2.2.4',
                'published' => 1,
                'slug' => 'a104-a111-charging-station-with-embedded-modem-v1',
                'created_at' => '2020-06-25 21:48:15',
                'updated_at' => '2020-07-09 22:38:36',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'M3 v1 Modem Firmware',
                'description' => '<p>New to 2024: Added support for improved international language. Added support for VCOM mode.</p><p>M3 Modem System Install Firmware. Note: Download CortexTools® to download firmware and configuration files to your M3 Modem. Files within the firmware zip files should not be renamed. Save files as is. Read the Installing Firmware Instructions for more information.</p>',
                'firmware_version' => '2.0.2.4',
                'published' => 1,
                'slug' => 'm3-v1-modem-firmware',
                'created_at' => '2020-06-25 21:51:29',
                'updated_at' => '2020-07-09 22:40:01',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'M3 v2 Modem Firmware',
                'description' => '<p>M3v2 Modem Firmware is for modems labeled "MFG#: BTHDG_M3_02" with "Rev. 03" below the MFG number. New to 2624: Refer to Readme file.</p><p>M3v2 Modem System Install Firmware. Note: Download CortexTools™ to download firmware and configuration files to your Charging Station with Embedded Modem. Files within the firmware zip files should not be renamed. Save files as is.&nbsp;</p>',
                'firmware_version' => '2.6.2.4',
                'published' => 1,
                'slug' => 'm3-v2-modem-firmware',
                'created_at' => '2020-06-25 21:52:46',
                'updated_at' => '2020-07-09 22:39:31',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'CR6000 Firmware',
                'description' => '<p>CR6000 System Install Firmware. Note: Download CortexTools® to download firmware and configuration files to your CR6000. Files within the firmware zip files should not be renamed. Save files as is. Read the Installing Firmware Instructions for more information.</p><p>New to 1306: Refer to readme file.</p>',
                'firmware_version' => '1.3.0.6',
                'published' => 1,
                'slug' => 'cr6000-firmware',
                'created_at' => '2020-06-25 21:54:49',
                'updated_at' => '2020-07-09 22:52:40',
                'deleted_at' => NULL,
                'status_id' => 1,
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'CR900 Firmware',
                'description' => NULL,
                'firmware_version' => '1.3.0.6',
                'published' => 1,
                'slug' => 'cr900-firmware',
                'created_at' => '2020-06-25 21:56:30',
                'updated_at' => '2020-06-25 21:56:30',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'CR1000 Firmware',
                'description' => NULL,
                'firmware_version' => '1.3.5',
                'published' => 1,
                'slug' => 'cr1000-firmware',
                'created_at' => '2020-06-25 21:58:21',
                'updated_at' => '2020-06-25 21:58:21',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'CR3600 Firmware',
                'description' => NULL,
                'firmware_version' => NULL,
                'published' => 1,
                'slug' => 'cr3600-firmware',
                'created_at' => '2020-06-25 22:00:30',
                'updated_at' => '2020-06-25 22:00:30',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'CR3600DPM Firmware',
                'description' => NULL,
                'firmware_version' => NULL,
                'published' => 1,
                'slug' => 'cr3600dpm-firmware',
                'created_at' => '2020-06-25 22:00:56',
                'updated_at' => '2020-06-25 22:00:56',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'CR1400 Firmware',
                'description' => NULL,
                'firmware_version' => NULL,
                'published' => 1,
                'slug' => 'cr1400-firmware',
                'created_at' => '2020-06-25 22:02:08',
                'updated_at' => '2020-06-25 22:02:08',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'CR1428 Firmware',
                'description' => NULL,
                'firmware_version' => NULL,
                'published' => 1,
                'slug' => 'cr1428-firmware',
                'created_at' => '2020-06-25 22:02:32',
                'updated_at' => '2020-06-25 22:02:32',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'CR8000 Firmware',
                'description' => NULL,
                'firmware_version' => NULL,
                'published' => 1,
                'slug' => 'cr8000-firmware',
                'created_at' => '2020-06-25 22:03:43',
                'updated_at' => '2020-06-25 22:03:43',
                'deleted_at' => NULL,
                'status_id' => NULL,
            ),
        ));
        
        
    }
}