<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class report extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'shehabelazazy';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


  $data = [
     $table = DB::table('tests')->select('test_account_id as account_id', DB::raw('count(*) as Number_of_tests'))
                     ->groupBy('test_account_id')->get(),

  ];

 Storage::disk('public')->put('pdf.json', json_encode($data));

  //$this->table($headers, $accounts);

  // Define font files

  //var pdfDoc = printer.createPdfKitDocument(docDefinition, options);
  //pdfDoc.pipe(fs.createWriteStrea



    }


}
