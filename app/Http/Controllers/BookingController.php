<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class BookingController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return View
     * @throws \Exception
     */
    public function index()
    {
        return view('index', [
            'movies' => Film::all(),
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createBooking()
    {
        return view('proteus::layouts.card-form', [
            'title' => 'Create Company',
            'form' => new CreateCompanyForm,
        ]);
    }

    /**
     * @param CreateCompanyRequest $request
     * @return RedirectResponse
     */
    public function postCreate(CreateCompanyRequest $request): RedirectResponse
    {
        /** @var Company $company */
        $company = Company::make($request->all());
        $company->address = $request->getAddress()->toDatabaseStruct();
        $company->user()->associate($request->getOwner());
        $company->save();

        return redirect()->route('company', [$company])
            ->withSuccess('Company Created');
    }

    /**
     * @param Company $company
     * @param CompanyTabs $tabs
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Company $company, CompanyTabs $tabs)
    {
        crumb('Home', '/')
            ->crumb('Companies', 'companies')
            ->crumb($company->name);

        $tabs->setActive('activities');

        return view('proteus-companies::layout', [
            'company' => $company,
            'subcontent' => view('proteus-activities::tab', ['activitable' => $company]),
        ]);
    }
}
