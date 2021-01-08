<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Contact;
use App\Csmenquiry;
use App\Appenquiry;
use App\Freedemo;
use App\Contactus;

use Mail;

class ContactController extends Controller{
	public function index(){
		$siteTitle = 'School ERP System Online | School CRM';
    	$siteKeywords = 'school erp';
    	$siteDescription = 'Robust, Fast & Secure online school ERP to minimize and organize school work efficiently.';
		return view('pages/contact')->with(compact('siteKeywords','siteDescription','siteTitle')); 
	}
	// public function store(Request $request){
		
	// 	// dd($request->all());
	// 	$me = $request->all();
		
		
	// 	$this->validate($request, [
	// 	'name' => 'bail|required|max:50|regex:/^[a-zA-Z][a-zA-Z ]{2,}$/',
	// 	'email' => 'bail|required|email|max:100',
	// 	'subject' => 'required|max:100',
	// 	'messages' => 'required|max:1000',
	// 	]);

	// 	$contact = new Contact([
	// 		'name' => $me['name'],
	// 		'email' => strip_tags($me['email']), 
	// 		'subject' => strip_tags($me['subject']), 
	// 		'message' => strip_tags($me['messages'])
	// 	]);

	// 	$contact->save();

	// 	Mail::send('email',
	// 	array(
	// 		'name' => strip_tags($request->get('name')),
	// 		'email' => strip_tags($request->get('email')),
	// 		'subject' => strip_tags($request->get('subject')),
	// 		'messages' => strip_tags($request->get('messages'))
	// 		), function($message)
	// 	{
	// 		$message->from('subhasmita@cybrain.co.in');
	// 		$message->to('subhasmita@cybrain.co.in', 'Admin')->subject('CSM Contact Feedback');
	// 	});
	// 	return back()->with('success','Send Successfully!');	

	// }
	public function store(Request $request){
		
		// dd($request->all());
		$me = $request->all();
		
		$validator = Validator::make($request->all(), [
		'name' => 'bail|required|max:50|regex:/^[a-zA-Z][a-zA-Z ]{2,}$/',
		'email' => 'bail|required|email|max:100',
		'mobile_number' => 'bail|required|regex:/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/|max:10|min:10',
		'subject' => 'required|max:100',
		'messages' => 'required|max:1000',
		]);

		$contact = new Contact([
			'name' => strip_tags($me['name']),
			'email' => strip_tags($me['email']), 
			'subject' => strip_tags($me['subject']), 
			'message' => strip_tags($me['messages']),
			'mobile_number' => strip_tags($me['mobile_number'])
		]);
		if ($validator->passes()) {
		$contact->save();

		Mail::send('email',
		array(
			'name' => strip_tags($request->get('name')),
			'email' => strip_tags($request->get('email')),
			'subject' => strip_tags($request->get('subject')),
			'messages' => strip_tags($request->get('messages')),
			'mobile_number' => strip_tags($request->get('mobile_number'))
			), function($message)
		{
			$message->from('mail@cyberschoolmanager.com');
			$message->to('mail@cyberschoolmanager.com', 'Admin')->subject('CSM Contact Feedback');
		});
		return response()->json(['success'=>'Sent Successfully!']);
		}
		else{
		return response()->json(['error'=>$validator->errors()->all()]);
		}	

	}
	public function storeenquiry(Request $request){

		// dd($request->all());
		$me = $request->all();

		$validator = Validator::make($request->all(), [
        'name' => 'bail|required|max:50|regex:/^[a-zA-Z][a-zA-Z ]{2,}$/',
		'email' => 'bail|required|email|max:100',
		'phone' => 'bail|required|regex:/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/|max:10',
		'message_here' => 'required|max:1000',
		]);

		$csmenquiry = new Csmenquiry([
			'name' => strip_tags($me['name']),
			'email' => strip_tags($me['email']), 
			'phone' => strip_tags($me['phone']), 
			'message_here' => strip_tags($me['message_here'])
		]);
		if ($validator->passes()) {

		$csmenquiry->save();

		Mail::send('emailenq',
		array(
			'name' => strip_tags($request->get('name')),
			'email' => strip_tags($request->get('email')),
			'phone' => strip_tags($request->get('phone')),
			'message_here' => strip_tags($request->get('message_here'))
			), function($message)
		{
			$message->from('mail@cyberschoolmanager.com');
			$message->to('mail@cyberschoolmanager.com', 'Admin')->subject('CSM Enquiry');
		});
		return response()->json(['success'=>'Enquiry Sent Successfully!']);
		}else{	
		return response()->json(['error'=>$validator->errors()->all()]);
		}

	}
	public function storedemo(Request $request)
    {
    	
    	$data = $request->all();

		$validator = Validator::make($request->all(), [
            'school_name' => 'bail|required|regex:/^[a-zA-Z][a-zA-Z ]{2,}$/|max:100',
			'school_board' => 'bail|required|max:100',
			'school_phone_number' => 'bail|required|regex:/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/|min:10|max:10',
			'school_website' => 'required|max:100|active_url',
			'school_email' => 'bail|required|email|max:50',
			'school_address' => 'required|max:500',
			]);

		$freedemo = new Freedemo([
			'school_name' => strip_tags($data['school_name']),
			'school_board' => strip_tags($data['school_board']), 
			'school_phone_number' => strip_tags($data['school_phone_number']), 
			'school_website' => strip_tags($data['school_website']),
			'school_email' => strip_tags($data['school_email']),
			'school_address' => strip_tags($data['school_address'])
		]);
        if ($validator->passes()) {

        	$freedemo->save();

        	Mail::send('emaildemo',
			array(
				'school_name' => strip_tags($request->get('school_name')),
				'school_board' => strip_tags($request->get('school_board')),
				'school_phone_number' => strip_tags($request->get('school_phone_number')),
				'school_website' => strip_tags($request->get('school_website')),
				'school_email' => strip_tags($request->get('school_email')),
				'school_address' => strip_tags($request->get('school_address'))
				), function($message)
			{
				$message->from('mail@cyberschoolmanager.com');
				$message->to('mail@cyberschoolmanager.com', 'Admin')->subject('CSM Free Demo Request');
			});

			return response()->json(['success'=>'Successfully Sent']);
			
        }


    	return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function storecontactus(Request $request)
    {
    	// dd($request->all());
    	$data = $request->all();

		$validator = Validator::make($request->all(), [
            'company_name' => 'bail|required|max:100',
			'company_website' => 'bail|required|max:100|active_url',
			'first_name' => 'required|max:50|regex:/^[a-zA-Z][a-zA-Z ]{2,}$/',
			'last_name' => 'required|max:50|regex:/^[a-zA-Z][a-zA-Z ]{2,}$/',
			'company_mail' => 'bail|required|email|max:100',
			'phone_number' => 'required|regex:/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/|max:10|min:10',
			'country' => 'required|max:100',
			'employees' => 'required|max:100',
			'partner' => 'required|max:100',
			'message_field' => 'required|max:1000',
			]);

		$contactus = new Contactus([
			'company_name' => strip_tags($data['company_name']),
			'company_website' => strip_tags($data['company_website']), 
			'first_name' => strip_tags($data['first_name']), 
			'last_name' => strip_tags($data['last_name']),
			'company_mail' => strip_tags($data['company_mail']), 
			'phone_number' => strip_tags($data['phone_number']),
			'country' => strip_tags($data['country']),
			'employees' => strip_tags($data['employees']),
			'partner' => strip_tags($data['partner']),
			'message_field' => strip_tags($data['message_field'])
		]);

		

        if ($validator->passes()) {

        	$contactus->save();

        	Mail::send('emailcontactus',
			array(
				'company_name' => strip_tags($request->get('company_name')),
				'company_website' => strip_tags($request->get('company_website')),
				'first_name' => strip_tags($request->get('first_name')),
				'last_name' => strip_tags($request->get('last_name')),
				'company_mail' => strip_tags($request->get('company_mail')),
				'phone_number' => strip_tags($request->get('phone_number')),
				'country' => strip_tags($request->get('country')),
				'employees' => strip_tags($request->get('employees')),
				'partner' => strip_tags($request->get('partner')),
				'message_field' => strip_tags($request->get('message_field'))
				), function($message)
			{
				$message->from('mail@cyberschoolmanager.com');
				$message->to('mail@cyberschoolmanager.com', 'Admin')->subject('CSM Partner Request');
			});

			return response()->json(['success'=>'Successfully Sent']);
			
        }

        else{
        	
    	return response()->json(['error'=>$validator->errors()->all()]);
        }
    }
    public function storeapp(Request $request)
    {
    	// dd($request->all());
    	$data = $request->all();

		$validator = Validator::make($request->all(), [
            'school_name' => 'bail|required|max:100',
			'school_board' => 'bail|required|max:100',
			'school_phonenumber' => 'bail|required|regex:/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/|max:12|min:10',
			'school_website' => 'required|max:100|active_url',
			'school_email' => 'bail|required|email|max:50',
			'contact_person' => 'required|max:20|regex:/^[a-zA-Z][a-zA-Z ]{2,}$/',
			'mobile_no' => 'bail|required|regex:/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/|max:10|min:10',
			'school_enquiry' => 'required|max:500',
			'school_address' => 'required|max:500',
			]);

		$appenquiry = new Appenquiry([
			'school_name' => $data['school_name'],
			'school_board' => $data['school_board'], 
			'school_phonenumber' => $data['school_phonenumber'], 
			'school_website' => $data['school_website'],
			'school_email' => $data['school_email'],
			'contact_person' => $data['contact_person'],
			'mobile_no' => $data['mobile_no'],
			'school_enquiry' => $data['school_enquiry'],
			'school_address' => $data['school_address']
		]);
        if ($validator->passes()) {

        	$appenquiry->save();

        	Mail::send('emailAPP',
			array(
				'school_name' => $request->get('school_name'),
				'school_board' => $request->get('school_board'),
				'school_phonenumber' => $request->get('school_phonenumber'),
				'school_website' => $request->get('school_website'),
				'school_email' => $request->get('school_email'),
				'contact_person' => $request->get('contact_person'),
				'mobile_no' => $request->get('mobile_no'),
				'school_enquiry' => $request->get('school_enquiry'),
				'school_address' => $request->get('school_address')
				), function($message)
			{
				$message->from('mail@cyberschoolmanager.com');
				$message->to('mail@cyberschoolmanager.com', 'Admin')->subject('CSM Mobile App Enquiry');
			});

			return response()->json(['success'=>'Successfully Sent']);
			
        }


    	return response()->json(['error'=>$validator->errors()->all()]);
    }
}
?>
