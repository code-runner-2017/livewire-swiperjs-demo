<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel Livewire Swiper Example

Minimalistic example showing how to get [Swiper](https://swiperjs.com/) working with Laravel Livewire.
The trick is to re-inizialize SwiperJS after Livewire updates the DOM,
as suggested [here](https://stackoverflow.com/questions/64091687/javascript-stop-executing-after-the-content-changes-laravel-livewire).

This is achived dispatching a browser event in the component: `$this->dispatchBrowserEvent('onContentChanged');`
The page catches the event and re-initializes Swiper:

```
window.addEventListener('onContentChanged', () => {
    initializeSwiper();
});
```

## Running the example

```
composer install
npm install
npm run dev
```

Set the `.env` file according to your environment. In particular, if your `/public` directory is not mapped under root,
set `LIVEWIRE_ASSET_URL=/<path>` with the relative path of your public directory. 

## License

This code is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
