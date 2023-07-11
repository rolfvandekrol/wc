<!doctype html>
<html lang="en" class="h-full">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Werkt de WC bij SWIS?</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link href="/compiled.css" rel="stylesheet">
  </head>
  <body class="h-full leading-loose">
    <div class="min-h-full flex flex-col">
      <div class="container mx-auto px-4 py-8 lg:pt-16 grow">
        <div class="lg:flex lg:flex-row lg:items-stretch lg:-mx-2">
          <div class="lg:basis-1/2 mb-4">
            <div class="rounded-lg bg-red-500 shadow-lg flex flex-col text-center px-5 py-10 md:mx-2 min-h-full">
              <div class="rounded-lg bg-green-500 shadow-lg flex flex-col text-center px-5 py-10 md:mx-2 min-h-full">
                <h1 class="font-bold text-xl text-green-200 mb-8">Werkt de WC bij SWIS?</h1>
                <div class="grow flex flex-col justify-center items-center">
                  <p class="text-white font-bold text-6xl mb-2">Ja</p>

              </div>
            </div>
          </div>
          <div class="lg:basis-1/2 mb-4">
            <div class="rounded-lg bg-blue-700 shadow-lg flex flex-col text-center px-5 py-10 md:mx-2 min-h-full">
              <h1 class="font-bold text-xl text-blue-200 mb-8">Op dit moment</h1>
              <div class="grow flex flex-col justify-center items-center">
                  <p class="text-white font-bold text-lg"><span class="block text-6xl mb-2"><?php print floor(floatval(time() - 1689053700) / (24.0 * 60.0 * 60.0)); ?></span> achtereenvolgende dagen met 2 werkende WC's.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mx-auto text-center text-slate-500 p-4">
        Made with ❤️ at <a href="https://www.swis.nl/" target="_blank" class="underline hover:no-underline">SWIS</a>.
      </div>
    </div>
  </body>
</html>
