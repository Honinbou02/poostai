<?php namespace Igaster\LaravelTheme\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class baseCommand extends Command
{

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The package tmp path.
     *
     * @var string
     */
    protected $tempPath;

    /**
     * Create a new route command instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem  $files
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->tempPath = $this->packages_path('tmp');

        $this->files = $files;

    }

    protected function createTempFolder()
    {
        $this->clearTempFolder();

        $this->files->makeDirectory($this->tempPath);
    }

    protected function clearTempFolder()
    {
        if ($this->files->exists($this->tempPath)) {

            $this->files->deleteDirectory($this->tempPath);

        }
    }

    protected function packages_path($path = '')
    {
        return storage_path('themes'.DIRECTORY_SEPARATOR.$path);
    }

    protected function theme_installed($themeName)
    {
        if (!\Theme::exists($themeName)) {

            return false;

        }

        $viewsPath = \Theme::find($themeName)->viewsPath;

        return $this->files->exists(themes_path($viewsPath.DIRECTORY_SEPARATOR.'theme.json'));
    }
}
