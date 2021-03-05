<?php

namespace App\Http\Traits;



use App\Models\Identity;
use Illuminate\Support\Str;

trait IdentityTrait
{
    /**
     * create identity
     * verify identity isset in database
     * insert identity in database on table identity
     * return identity
     *
     * @param $value
     * @return string
     */

    public function identity($value = null)
    {
        $isset = Identity::where('identity', $value)->first();

        if ($isset) {

            $identity = Str::random(25);

            return $this->identity($identity);

        }

        return Identity::create(['identity' => $value]);

    }

    /**
     * Rand Value Of Identity Cookies
     * @return string
     */
    protected function rand(){

        return Str::random(25);

    }

    protected function createNewClient()
    {
        $value = $this->rand();
        $identity = $this->identity($value);
        cookie()->queue('Identity', $value, 365 * 10 * 24 * 60);
        return $identity;
    }

    protected function hasIdentity(string $cookie)
    {
        return Identity::where('identity', $cookie)->first();
    }

    protected function getContact () {

        $cookie = request()->cookie('Identity');
        if ($cookie) {
            $identity = Identity::where('identity', $cookie)->first();
            if ($identity) {
                if ($identity->contact) {
                    return $identity->contact;
                }
            }
        }
        return null;
    }

    protected function filter(string $value, array $items)
    {
        foreach ($items as $item) {
            if ($item === $value) {
                return true;
            }
        }

        return false;
    }
}