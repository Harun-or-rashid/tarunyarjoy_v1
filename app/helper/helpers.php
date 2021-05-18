<?php

/**
 * roleText
 *
 * @return string
 */
function roleText(): string
{
    return auth()->user()->roleNameC();
    // if (auth()->check()) {
    //     $role = ucwords(join(' ', auth()->user()->getRoleNames()->all()));
    //     return $role;
    // }
}

/**
 * active
 *
 * @param  mixed $route
 * @param  mixed $text
 * @return string
 */
function active($route, $text = "active"): string
{
    return request()->route()->getName() == $route ? $text : '';
}

/**
 * set_active
 *
 * @param  mixed $path
 * @param  mixed $active
 * @return string
 */
function set_active($path, $active = 'active'): string
{
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

/**
 * randUserAvatar return random users avator
 *
 * @return string
 */
function randUserAvatar(): string
{
    return "assets/img/avatar" . rand(1, 5) . ".png";
}

/**
 * selected
 *
 * @param  mixed $data1
 * @param  mixed $data2
 * @return string
 */
function selected($data1, $data2): string
{
    if (!is_array($data2)) {
        return $data1 == $data2 ? 'selected' : '';
    } else {
        return in_array($data1, $data2) ? 'selected' : '';
    }
}

/**
 * donationQuate return random quate
 *
 * @param  int $no
 * @return string
 */
function donationQuate(int $no): string
{
    $quates = [
        "Making a donation is the ultimate sign of solidarity. Actions speak louder than words.",
        "It is when you give of yourself that you truly give.",
        "Alone we can do so little; together we can do so much",
        "Only by giving are you able to receive more than you already have",
        "It’s not how much we give, but how much love we put into giving.",
    ];
    return $quates[$no] ?? "Making a donation is the ultimate sign of solidarity. Actions speak louder than words.";
}
