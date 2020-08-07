<?php

use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('careers')->delete();
        
        \DB::table('careers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'job_title' => 'Code Internship',
                'open_date' => '2020-03-31',
                'close_date' => NULL,
            'job_description' => '<p><strong>Code is seeking interns within the following departments:&nbsp;</strong></p><ul><li><strong>Product Management Department</strong></li><li><strong>Marketing Department</strong></li><li><strong>Engineering Department</strong></li><li><strong>Technology Department (located in Boston)</strong></li><li><strong>Operations Department</strong></li></ul><p><strong>Perks to being a Code Intern at Code</strong></p><ul><li>As an intern, you are an intimate part of the entire design process from the initial design concept, to prototype, to testing, to mass production.</li><li>Gain real-world exposure to problems and issues that perhaps are not found in textbooks.</li><li>Increase your marketability to employers. (Including Code; many&nbsp; of our internships become full-time employment)</li><li>"Try before you buy" experience, as an intern you will get to evaluate Code or even the career paths prior to committing to full-time employment.</li><li>Increase your self-confidence in the workplace, while easing the transition from being a student to entering the workforce.</li><li>Have resume-building experience while applying concepts and principles you have learned during school.</li><li>Receive hands-on experience and exposure to real-world scenarios.</li><li>Network with professionals in your field, for references and future job opportunities.</li><li>Earn income; all Code internships are paid an hourly wage.</li><li>Code offers flexible hours for our interns.</li><li>New open concept collaborating workspace.</li><li>Coffee and Breakfast (cereal) bar</li></ul><p>&nbsp;The next steps in the process are to attach your resume and answer the quick questionnaire.</p><p>We look forward to having you on our team!</p>',
                'about_code_section' => NULL,
                'published' => 0,
                'apply_link' => NULL,
                'slug' => NULL,
                'created_at' => '2020-04-01 00:31:07',
                'updated_at' => '2020-04-01 00:31:57',
                'deleted_at' => NULL,
                'department_id' => 6,
            ),
            1 => 
            array (
                'id' => 2,
                'job_title' => 'Firmware Engineer',
                'open_date' => '2020-05-14',
                'close_date' => '2020-07-13',
            'job_description' => '<p>Code Corporation engineering team is looking for talented and self-motivated engineers with strong embedded system knowledge and firmware development experience who can apply his/her expertise in embedded system\'s firmware design, development, and support for our products. As a member of the engineering team, your job functions will include the full lifecycle of design, develop, modify, test, debug, and support the new as well as the existing firmware for all our devices.</p><ul><li>Responsible for the production and maintenance of firmware that meets quality system requirements as it relates to Code Corporation</li><li>Maintain and improve firmware for all products</li><li>Monitor industry trend, apply new technology and methodology to internal practices</li><li>Develops solutions to firmware issues</li><li>Design and develop the firmware needed to market Code products</li><li>Heavily influence PC software design</li><li>Work with marketing to define new product requirements, write product specifications and estimate schedules</li><li>Responsibility for the overall quality of the firmware being released to support a new product or update an existing product</li></ul><p><strong>Qualifications:</strong></p><ul><li>BS/BA in Computer Science, Electrical Engineering, or Computer Engineering or equivalent experience</li><li>2+ years of experience in firmware development</li><li>Experience managing the full lifecycle of a project (design, develop, integrate, test, and ship) is a desired</li><li>Ability to work in a team environment</li><li>Must be a self-starter</li><li>Solid C/C++ experience is required, as well as experience in Linux</li></ul><p><strong>Benefits</strong></p><ul><li>100% Employee Paid Medical</li><li>100% Employee Paid Dental</li><li>Vision Insurance</li><li>4% Match 401k</li><li>$50k Paid Life Insurance</li><li>Personal Time</li><li>Vacation Time</li></ul>',
            'about_code_section' => '<p><strong>Perks to being a Code Employee</strong></p><ul><li>As a Code employee, you are an intimate part of the entire design process from the initial design concept, to prototype, to testing, to mass production.</li><li>Partner with top professionals in multiple fields</li><li>Build your personal network of fellow professionals</li><li>Code offers flexible work hours</li><li>New open concept collaboration workspace</li><li>Motorized standing desks</li><li>Multiple workstation monitors</li><li>Fully stocked drink fridge</li><li>Snacks galore</li><li>Coffee and Breakfast (cereal) bar</li><li>Lounge area in office</li><li>Gaming center</li><li>Ping-Pong tables</li><li>Cornhole</li></ul>',
                'published' => 1,
                'apply_link' => 'https://codecorp.applicantpro.com/jobs/1406313.html',
                'slug' => NULL,
                'created_at' => '2020-06-17 17:05:43',
                'updated_at' => '2020-06-17 17:24:16',
                'deleted_at' => NULL,
                'department_id' => 3,
            ),
            2 => 
            array (
                'id' => 3,
                'job_title' => 'Process Engineer',
                'open_date' => '2020-05-14',
                'close_date' => '2020-07-13',
            'job_description' => '<p>The Process Engineer will work in our Manufacturing Department and will be responsible for developing, installing, and monitoring the equipment and processes that turn raw materials into an end product. The candidate should also be able to recommend improvements to the process through the tracking of metrics and reporting of data. The candidate should definitely have strong technical abilities in order to succeed in this role.</p><p><strong>Responsibilities</strong></p><ul><li>Develop documentation and process for product repairs and fulfillment processes both at Code HQ and our contract manufacturers.</li><li>Liaison between management, Engineering and Contract Manufacturer production personnel on any production/manufacturing/fulfillment issues and make the process and/or equipment change suggestions for improvements</li><li>Demonstrate a broad understanding of product build and fulfillment processes, providing support to the Contract Manufacturer and outbound at Code global locations.</li><li>Responsible to assist with review and setup of outbound fulfillment center(s).</li><li>Responsible for all customizations setup and tracking as well as FA process completion and documentation.</li><li>Drive automation and process improvements in manufacturing, fulfillment, and other areas as assigned</li><li>Research, design, and develop processes to optimize productivity and workflow.</li></ul><p><strong>Qualifications</strong></p><ul><li>Bachelor\'s degree or equivalent experience in Engineering (Technology)</li><li>2+ years of experience</li><li>Familiarity with process control</li><li>Excellent written and oral skills</li><li>Experience developing business cases with strong analytical problem-solving skills.</li><li>Driving, planning, and interpreting both qualitative and quantitative research.</li><li>Ability to work independently and collaboratively</li></ul><p><strong>Benefits &amp; Perks</strong></p><ul><li>100% Employee Paid Medical</li><li>100% Employee Paid Dental</li><li>Vision Insurance</li><li>4% Match 401k</li><li>$50k Paid Life Insurance</li><li>Personal Time</li><li>Vacation Time</li><li>9/80 Schedule - What that means is we work our 80 hours in 9 days which allows us to have every other Friday off. So besides your vacation time, your personal time, you will also get 26 extra days off a year or how I like to look at it 26 3-days weekends a year.</li></ul>',
            'about_code_section' => '<p><strong>Perks to being a Code Employee</strong></p><ul><li>As a Code employee, you are an intimate part of the entire design process from the initial design concept, to prototype, to testing, to mass production.</li><li>Partner with top professionals in multiple fields</li><li>Build your personal network of fellow professionals</li><li>Code offers flexible work hours</li><li>New open concept collaboration workspace</li><li>Motorized standing desks</li><li>Multiple workstation monitors</li><li>Fully stocked drink fridge</li><li>Snacks galore</li><li>Coffee and Breakfast (cereal) bar</li><li>Lounge area in office</li><li>Gaming center</li><li>Ping-Pong tables</li><li>Cornhole</li></ul>',
                'published' => 1,
                'apply_link' => 'https://codecorp.applicantpro.com/jobs/1406315.html',
                'slug' => NULL,
                'created_at' => '2020-06-17 17:08:13',
                'updated_at' => '2020-06-17 17:24:30',
                'deleted_at' => NULL,
                'department_id' => 5,
            ),
            3 => 
            array (
                'id' => 4,
                'job_title' => 'Quality Technician',
                'open_date' => '2020-02-27',
                'close_date' => '2020-07-27',
                'job_description' => '<p>Code is seeking a QUALITY TECHNICIAN with will report directly to the Quality Manager, this is a full-time position located in our Murray, UT headquarters.</p><p>We are looking for a skilled, detail-oriented Quality Coordinator to join our team. If you are a tech-savvy, with experience in troubleshooting, possess good verbal and written communications skills, this position is right for you.</p><p><strong>Basic duties include but are not limited to:</strong></p><ul><li>Test product returned from customer Track and Record results from RMA Triage Mechanical disassembly of product Assist in repair of product ERP transactions of RMA product Discrepant Material handling and tracking Research tasks within Code SharePoint database Monitor RMA product for logged Quality Issues Requests Monthly Metrics for RMA defects Assist as needed in conducting product and process audits through Code departments Assist with data entry for ERP system Assists other departments as needed with duties assigned by direct supervisor</li></ul><p><strong>Qualifications</strong></p><ul><li>Microsoft Office experience</li><li>High School Diploma or equivalent</li><li>Detailed Oriented and Organized</li><li>Outgoing and have a positive attitude</li><li>Technology Friendly</li><li>Coachability and willingness to learn</li></ul><p><strong>Benefits &amp; Perks</strong></p><ul><li>100% Employee Paid Medical</li><li>100% Employee Paid Dental</li><li>Vision Insurance</li><li>4% Match 401k</li><li>$50k Paid Life Insurance</li><li>Personal Time</li><li>Vacation Time</li><li>9/80 Schedule - What that means is we work our 80 hours in 9 days which allows us to have every other Friday off. So, besides your vacation time, your personal time, you will also get 26 extra days off a year or how I like to look at it 26 3-days weekends a year.</li></ul>',
            'about_code_section' => '<p><strong>Perks to being a Code Employee</strong></p><ul><li>As a Code employee, you are an intimate part of the entire design process from the initial design concept, to prototype, to testing, to mass production.</li><li>Partner with top professionals in multiple fields</li><li>Build your personal network of fellow professionals</li><li>Code offers flexible work hours</li><li>New open concept collaboration workspace</li><li>Motorized standing desks</li><li>Multiple workstation monitors</li><li>Fully stocked drink fridge</li><li>Snacks galore</li><li>Coffee and Breakfast (cereal) bar</li><li>Lounge area in office</li><li>Gaming center</li><li>Ping-Pong tables</li><li>Cornhole</li></ul>',
                'published' => 1,
                'apply_link' => 'https://codecorp.applicantpro.com/jobs/1349321.html',
                'slug' => NULL,
                'created_at' => '2020-06-17 17:22:57',
                'updated_at' => '2020-06-17 17:25:04',
                'deleted_at' => NULL,
                'department_id' => 5,
            ),
            4 => 
            array (
                'id' => 5,
                'job_title' => 'Warehouse & Receiving Lead',
                'open_date' => '2020-05-14',
                'close_date' => '2020-07-13',
            'job_description' => '<p>Despite the current health crisis in the country, we have been deemed an essential business and are busy making sure our great medical professionals have the scanner they need to make their jobs easier during this challenging time. We are seeking a Warehouse &amp; Receiving Lead to join our team!</p><p><strong>RESPONSIBILITIES:</strong></p><ul><li>Supervision of the Fulfillment and Repairs Team - Providing training, mentoring, and assistance to all teams and maintain documentation. All technicians should be cross-trained to ensure minimal impact during staff fluctuations</li><li>Responsible for the organization and cleanliness of the entire fulfillment, repairs, packaging, receiving, warehouse, and shipping areas</li><li>Ensure the fulfillment team is fully utilized to capacity during slower weeks, assisting the Operations Manager in distributing the workload across the entire month.</li><li>Using good judgment in assessing effective use of time and priorities for the fulfillment line and repairs department</li><li>Responsible to oversee and coordinate all orders including Epicor monitoring and updates, ensuring the team consistently meets "On-Time" metrics goals</li><li>Responsible for driving continuous improvements in the areas of safety, quality, cost, delivery, productivity, and morale</li><li>Responsible to excel at all responsibilities of the Fulfillment Technicians</li><li>Responsible to submit Inventory Management requests to receive a product to replenish the fulfillment line</li><li>Oversee receiving and warehouse to ensure all tasks are up to date and completed on time</li><li>Monitor inventory counts to drive increased physical inventory count accuracy</li><li>Ensure receiving daily both at HQ and from the manufactures</li><li>Ensure RMA processing</li></ul><p><strong>REQUIRED EXPERIENCE:</strong></p><ul><li>Minimum 2 to 4 years of experience in a warehouse environment</li><li>Excellent interpersonal and leadership skills.</li><li>Exceptional verbal and written communication and presentation skills are required.</li><li>Experience developing business cases with strong analytical problem-solving skills.</li><li>Microsoft Office (excel, word, and outlook) experience.</li></ul><p><strong>Benefits &amp; Perks</strong></p><ul><li>100% Employee Paid Medical</li><li>100% Employee Paid Dental</li><li>Vision Insurance</li><li>4% Match 401k</li><li>$50k Paid Life Insurance</li><li>Personal Time</li><li>Vacation Time</li><li>9/80 Schedule - What that means is we work our 80 hours in 9 days which allows us to have every other Friday off. So besides your vacation time, your personal time, you will also get 26 extra days off a year or how I like to look at it 26 3-days weekends a year.</li></ul>',
            'about_code_section' => '<p><strong>Perks to being a Code Employee</strong></p><ul><li>As a Code employee, you are an intimate part of the entire design process from the initial design concept, to prototype, to testing, to mass production.</li><li>Partner with top professionals in multiple fields</li><li>Build your personal network of fellow professionals</li><li>Code offers flexible work hours</li><li>New open concept collaboration workspace</li><li>Motorized standing desks</li><li>Multiple workstation monitors</li><li>Fully stocked drink fridge</li><li>Snacks galore</li><li>Coffee and Breakfast (cereal) bar</li><li>Lounge area in office</li><li>Gaming center</li><li>Ping-Pong tables</li><li>Cornhole</li></ul>',
                'published' => 1,
                'apply_link' => 'https://codecorp.applicantpro.com/jobs/1406333.html',
                'slug' => NULL,
                'created_at' => '2020-06-17 17:26:35',
                'updated_at' => '2020-06-17 17:27:08',
                'deleted_at' => NULL,
                'department_id' => 5,
            ),
        ));
        
        
    }
}