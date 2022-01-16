<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Twitter;

class TweetBtcPercentageCompletedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweet:btc-percentage-completed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tweets the percentage of blocks already mined of the total blocks that are needed to mine every one of the 21M btc.';

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
        $lastBlock = $this->getLastBlockWithBtc();
        $currentBlock = $this->getLatestBlock();

        $percentageCompleted = $this->calcPercentageCompleted($currentBlock, $lastBlock);

        $message = "%$percentageCompleted to the last btc created";

        $this->tweet($message);
    }

    private function getLatestBlock()
    {
        $result = Http::get('https://chain.api.btc.com/v3/block/latest');
        return $result['data']['height'];
    }

    private function getLastBlockWithBtc()
    {
        return 6930000;
    }

    private function calcPercentageCompleted(int $currentBlock, int $lastBlock)
    {
        return round(($currentBlock / $lastBlock) * 100, 2);
    }

    private function tweet(string $message)
    {
        Twitter::forApiV1()->postTweet(['status' => $message]);
    }
}
