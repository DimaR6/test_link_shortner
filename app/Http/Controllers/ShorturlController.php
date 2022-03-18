<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShorturlRequest;
use App\Http\Requests\UpdateShorturlRequest;
use App\Repositories\ShorturlRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ShorturlController extends AppBaseController
{
    /** @var ShorturlRepository $shorturlRepository*/
    private $shorturlRepository;

    public function __construct(ShorturlRepository $shorturlRepo)
    {
        $this->shorturlRepository = $shorturlRepo;
    }

    /**
     * Display a listing of the Shorturl.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shorturls = $this->shorturlRepository->all();

        return view('shorturls.index')
            ->with('shorturls', $shorturls);
    }

    /**
     * Show the form for creating a new Shorturl.
     *
     * @return Response
     */
    public function create()
    {
        return view('shorturls.create');
    }

    /**
     * Store a newly created Shorturl in storage.
     *
     * @param CreateShorturlRequest $request
     *
     * @return Response
     */
    public function store(CreateShorturlRequest $request)
    {
        $input = $request->all();

        $shorturl = $this->shorturlRepository->create($input);

        Flash::success('Shorturl saved successfully.');

        return redirect(route('shorturls.index'));
    }

    /**
     * Display the specified Shorturl.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shorturl = $this->shorturlRepository->find($id);

        if (empty($shorturl)) {
            Flash::error('Shorturl not found');

            return redirect(route('shorturls.index'));
        }

        return view('shorturls.show')->with('shorturl', $shorturl);
    }

    /**
     * Show the form for editing the specified Shorturl.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shorturl = $this->shorturlRepository->find($id);

        if (empty($shorturl)) {
            Flash::error('Shorturl not found');

            return redirect(route('shorturls.index'));
        }

        return view('shorturls.edit')->with('shorturl', $shorturl);
    }

    /**
     * Update the specified Shorturl in storage.
     *
     * @param int $id
     * @param UpdateShorturlRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShorturlRequest $request)
    {
        $shorturl = $this->shorturlRepository->find($id);

        if (empty($shorturl)) {
            Flash::error('Shorturl not found');

            return redirect(route('shorturls.index'));
        }

        $shorturl = $this->shorturlRepository->update($request->all(), $id);

        Flash::success('Shorturl updated successfully.');

        return redirect(route('shorturls.index'));
    }

    /**
     * Remove the specified Shorturl from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shorturl = $this->shorturlRepository->find($id);

        if (empty($shorturl)) {
            Flash::error('Shorturl not found');

            return redirect(route('shorturls.index'));
        }

        $this->shorturlRepository->delete($id);

        Flash::success('Shorturl deleted successfully.');

        return redirect(route('shorturls.index'));
    }
}
