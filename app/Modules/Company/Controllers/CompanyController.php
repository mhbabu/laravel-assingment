<?php

namespace App\Modules\Company\Controllers;

use App\DataTables\CompanyListDataTable;
use App\Libraries\Encryption;
use App\Modules\Company\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CompanyListDataTable $dataTable)
    {
        return $dataTable->render("Company::index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Company::create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'name'    => ['required', Rule::unique('companies')->where(function ($query) { $query->where('is_archive', false); })],
                'email'   => 'required|email|unique:companies',
                'logo'    => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=100,min_height=100,max_width=100,max_height=100',
            ],[
                'logo' => 'Only 100*100 dimention logo is allowed !'
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => $validation->errors()
                ]);
            }

            $company         = new Company();
            $company->name   = $request->input('name');
            $company->email  = $request->input('email');
            $company->status = 1;

            if($request->hasFile('logo')){
                $path = 'uploads/companies-logo/';
                $_companyLogo = $request->file('logo');
                $mimeType = $_companyLogo->getClientMimeType();

                if(!in_array($mimeType,['image/jpg', 'image/jpeg', 'image/png']))
                    throw new \Exception('Only PNG or JPEG or JPG type images are allowed!', 123);

                if(!file_exists($path))
                    mkdir($path, 0777, true);

                $companayLogo = trim(sprintf('%s', uniqid('companayLogo_', true))) . '.' . $_companyLogo->getClientOriginalExtension();
                Image::make($_companyLogo->getRealPath())->resize(100,100)->save($path . '/' . $companayLogo); // Somehow uploaded big size dimention it will resize image 100*100
                $company->logo = $companayLogo;
            }

            $company->save();

            return response()->json([
                'success' => true,
                'status'  => 'Company created successfully.',
                'link'    => route('companies.index')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error'  => true,
                'status' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $companyId
     * @return \Illuminate\Http\Response
     */
    public function show($companyId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $companyId
     * @return \Illuminate\Http\Response
     */
    public function edit($companyId)
    {
        $decodedCompanyId = Encryption::decodeId($companyId);
        $data['company'] = Company::find($decodedCompanyId);

        return view("Company::edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $companyId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $companyId)
    {
        try {
            $decodedCompanyId = Encryption::decodeId($companyId);
            $validation = Validator::make($request->all(), [
                'name'    => ['required', Rule::unique('companies')->ignore($decodedCompanyId)->where(function ($query) {
                    $query->where('is_archive', false); })],
                'email'   => ['required', 'email', Rule::unique('companies')->ignore($decodedCompanyId)],
                'logo'    => 'sometimes|nullable|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=100,min_height=100,max_width=100,max_height=100',
            ],[
                'logo' => 'Only 100*100 dimention logo is allowed !'
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => $validation->errors()
                ]);
            }

            $company = Company::find($decodedCompanyId);
            $company->name   = $request->input('name');
            $company->email  = $request->input('email');
            $company->status = 1;

            if($request->hasFile('logo')){
                $path = 'uploads/companies-logo/';
                $_companyLogo = $request->file('logo');
                $mimeType = $_companyLogo->getClientMimeType();

                if(!in_array($mimeType,['image/jpg', 'image/jpeg', 'image/png']))
                    throw new \Exception('Only PNG or JPEG or JPG type images are allowed!', 123);

                if(!file_exists($path))
                    mkdir($path, 0777, true);

                $companayLogo = trim(sprintf('%s', uniqid('companayLogo_', true))) . '.' . $_companyLogo->getClientOriginalExtension();
                Image::make($_companyLogo->getRealPath())->resize(100,100)->save($path . '/' . $companayLogo); // Somehow uploaded big size dimention it will resize image 100*100
                $company->logo = $companayLogo;
            }

            $company->save();

            return response()->json([
                'success' => true,
                'status' => 'Company updated successfully.',
                'link' => route('companies.index')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'status' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $companyId
     * @return \Illuminate\Http\Response
     */
    public function destroy($companyId)
    {
        $decodedCompanyId     = Encryption::decodeId($companyId);
        $company              = Company::find($decodedCompanyId);
        $company->is_archive  = 1;
        $company->deleted_by  = auth()->user()->id;
        $company->deleted_at  = now();
        $company->save();

        return response()->json([]);
    }
}
