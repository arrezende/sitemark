<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function moveUp()
    {
        $this->move(-1);
    }
    public function moveDown()
    {
        $this->move(+1);
    }


    /**
     * Moves the link $to positions in the user's list of links.
     * @param int $to +1 for moving down, -1 for moving up.
     */
    private function move($to)
    {
        $order = $this->sort;
        $newOrder = $order + $to;
        $user = $this->user()->get()->first();
        $swapWith = $user->links()
            ->where('sort', $newOrder)
            ->first();

        while (!$swapWith) {
            $newOrder += $to;

            $swapWith = $user->links()
                ->where('sort', $newOrder)
                ->first();
        }
        $this->fill(['sort' => $newOrder])->save();
        $swapWith->fill(['sort' => $order])->save();
    }
}
