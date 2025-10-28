<?php

namespace Mamun2074\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use Mamun2074\LaravelInstaller\Helpers\EnvironmentManager;
use Mamun2074\LaravelInstaller\Request\UpdateRequest;

/**
 * Class EnvironmentController
 * @package Mamun2074\LaravelInstaller\Controllers
 */
class EnvironmentController extends Controller
{

    /**
     * @var EnvironmentManager
     */
    protected $environmentManager;

    /**
     * @param EnvironmentManager $environmentManager
     */
    public function __construct(EnvironmentManager $environmentManager)
    {
        $this->environmentManager = $environmentManager;
    }

    /**
     * Display the Environment page.
     *
     * @return \Illuminate\View\View
     */
    public function environment()
    {
        $envConfig = $this->environmentManager->getEnvContent();

        return view('vendor.installer.environment', compact('envConfig'));
    }

    /**
     * @param UpdateRequest $request
     * @return string
     */
    public function save(UpdateRequest $request)
    {

        $message = $this->environmentManager->saveFile($request);
        return $message;

    }

}
