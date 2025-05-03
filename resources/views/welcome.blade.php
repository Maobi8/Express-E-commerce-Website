{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                    <h1 class="mb-1 font-medium">Let's get started</h1>
                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Laravel has an incredibly rich ecosystem. <br>We suggest starting with the following.</p>
                    <ul class="flex flex-col mb-4 lg:mb-6">
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Read the
                                <a href="https://laravel.com/docs" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ml-1">
                                    <span>Documentation</span>
                                    <svg
                                        width="10"
                                        height="11"
                                        viewBox="0 0 10 11"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-2.5 h-2.5"
                                    >
                                        <path
                                            d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                            stroke="currentColor"
                                            stroke-linecap="square"
                                        />
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Watch video tutorials at
                                <a href="https://laracasts.com" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ml-1">
                                    <span>Laracasts</span>
                                    <svg
                                        width="10"
                                        height="11"
                                        viewBox="0 0 10 11"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-2.5 h-2.5"
                                    >
                                        <path
                                            d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                            stroke="currentColor"
                                            stroke-linecap="square"
                                        />
                                    </svg>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <ul class="flex gap-3 text-sm leading-normal">
                        <li>
                            <a href="https://cloud.laravel.com" target="_blank" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                                Deploy now
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
                    {{-- Laravel Logo --}}
                    {{-- <svg class="w-full text-[#F53003] dark:text-[#F61500] transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />
                        <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337ZM108.76 75.7472C107.762 78.4531 106.366 80.8078 104.572 82.8112C102.776 84.8161 100.606 86.4183 98.0637 87.6206C95.5202 88.823 92.7004 89.4238 89.6103 89.4238C86.5178 89.4238 83.7252 88.823 81.2324 87.6206C78.7388 86.4183 76.5949 84.8161 74.7998 82.8112C73.004 80.8078 71.6319 78.4531 70.6856 75.7472C69.7356 73.0421 69.2644 70.1868 69.2644 67.1821C69.2644 64.1758 69.7356 61.3205 70.6856 58.6154C71.6319 55.9102 73.004 53.5571 74.7998 51.5522C76.5949 49.5495 78.738 47.9451 81.2324 46.7427C83.7252 45.5404 86.5178 44.9396 89.6103 44.9396C92.7012 44.9396 95.5202 45.5404 98.0637 46.7427C100.606 47.9451 102.776 49.5487 104.572 51.5522C106.367 53.5571 107.762 55.9102 108.76 58.6154C109.756 61.3205 110.256 64.1758 110.256 67.1821C110.256 70.1868 109.756 73.0421 108.76 75.7472Z" fill="currentColor" />
                        <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337ZM241.31 75.7472C240.312 78.4531 238.916 80.8078 237.122 82.8112C235.326 84.8161 233.156 86.4183 230.614 87.6206C228.07 88.823 225.251 89.4238 222.16 89.4238C219.068 89.4238 216.275 88.823 213.782 87.6206C211.289 86.4183 209.145 84.8161 207.35 82.8112C205.554 80.8078 204.182 78.4531 203.236 75.7472C202.286 73.0421 201.814 70.1868 201.814 67.1821C201.814 64.1758 202.286 61.3205 203.236 58.6154C204.182 55.9102 205.554 53.5571 207.35 51.5522C209.145 49.5495 211.288 47.9451 213.782 46.7427C216.275 45.5404 219.068 44.9396 222.16 44.9396C225.251 44.9396 228.07 45.5404 230.614 46.7427C233.156 47.9451 235.326 49.5487 237.122 51.5522C238.917 53.5571 240.312 55.9102 241.31 58.6154C242.306 61.3205 242.806 64.1758 242.806 67.1821C242.805 70.1868 242.305 73.0421 241.31 75.7472Z" fill="currentColor" />
                        <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />
                        <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />
                        <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor" />
                        <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656ZM357.02 61.0967C357.145 59.7487 359.023 43.3761 376.442 43.3761C393.861 43.3761 395.978 59.7464 396.099 61.0967H357.02Z" fill="currentColor" />
                    </svg> --}}

                    {{-- Light Mode 12 SVG --}}
                    {{-- <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] dark:hidden" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black" />
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black" />
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#F8B803" />
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#F8B803" />
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#F0ACB8" />
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#F0ACB8" />
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g style="mix-blend-mode: plus-darker" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" fill="#F3BEC7" />
                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" fill="#F3BEC7" />
                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#F0ACB8" />
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="round" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#F0ACB8" />
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                    </svg> --}}

                    {{-- Dark Mode 12 SVG --}}
                    {{-- <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] hidden dark:block" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black"/>
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#391800"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#391800"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#733000"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#733000"/>
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.726 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#4B0600"/>
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="round"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#4B0600"/>
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                    </svg> --}}
                    {{-- <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div> --}}
                {{-- </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body> --}}
{{-- </html> --}} 

<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.storebuild.shop/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Mar 2025 13:04:03 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Xpress - Multipurpose eCommerce HTML Website</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/preloader/xpress-logo2.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="assets/css/flaticon_shofy.css">
      <link rel="stylesheet" href="assets/css/spacing.css">
      <link rel="stylesheet" href="assets/css/main.css">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <!-- loading content here -->
               <div class="tp-preloader-content">
                  <div class="tp-preloader-logo">
                     <div class="tp-preloader-circle">
                        <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                           <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                       </svg>
                     </div>
                     <img src="assets/img/logo/preloader/xpress-logo2.png" alt="" style="width: 160px; height: auto;">
                    </div>
                  <h6 class="tp-preloader-title">Xpress</6>
                  <p class="tp-preloader-subtitle">Loading</p>
               </div>
            </div>
         </div>  
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
         </button>
      </div>
      <!-- back to top end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__area offcanvas__radius">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="index.html">
                        <img src="assets/img/logo/logo.svg" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="offcanvas__category pb-40">
                  <button class="tp-offcanvas-category-toggle">
                     <i class="fa-solid fa-bars"></i>
                     All Categories
                  </button>
                  <div class="tp-category-mobile-menu">
                     
                  </div>
               </div>
               <div class="tp-main-menu-mobile fix d-lg-none mb-40"></div>

               <div class="offcanvas__contact align-items-center d-none">
                  <div class="offcanvas__contact-icon mr-20">
                     <span>
                        <img src="assets/img/icon/contact.png" alt="">
                     </span>
                  </div>
                  <div class="offcanvas__contact-content">
                     <h3 class="offcanvas__contact-title">
                        <a href="tel:098-852-987">004524865</a>
                     </h3>
                  </div>
               </div>
               <div class="offcanvas__btn">
                  <a href="contact.html" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
               </div>
            </div>
            <div class="offcanvas__bottom">
               <div class="offcanvas__footer d-flex align-items-center justify-content-between">
                  <div class="offcanvas__currency-wrapper currency">
                     <span class="offcanvas__currency-selected-currency tp-currency-toggle" id="tp-offcanvas-currency-toggle">Currency : USD</span>
                     <ul class="offcanvas__currency-list tp-currency-list">
                        <li>USD</li>
                        <li>ERU</li>
                        <li>BDT </li>
                        <li>INR</li>
                     </ul>
                  </div>
                  <div class="offcanvas__select language">
                     <div class="offcanvas__lang d-flex align-items-center justify-content-md-end">
                        <div class="offcanvas__lang-img mr-15">
                           <img src="assets/img/icon/language-flag.png" alt="">
                        </div>
                        <div class="offcanvas__lang-wrapper">
                           <span class="offcanvas__lang-selected-lang tp-lang-toggle" id="tp-offcanvas-lang-toggle">English</span>
                           <ul class="offcanvas__lang-list tp-lang-list">
                              <li>Spanish</li>
                              <li>Portugese</li>
                              <li>American</li>
                              <li>Canada</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <!-- mobile menu area start -->
      <div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
         <div class="container">
            <div class="row row-cols-5">
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="shop.html" class="tp-mobile-item-btn">
                        <i class="flaticon-store"></i>
                        <span>Store</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <button class="tp-mobile-item-btn tp-search-open-btn">
                        <i class="flaticon-search-1"></i>
                        <span>Search</span>
                     </button>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="wishlist.html" class="tp-mobile-item-btn">
                        <i class="flaticon-love"></i>
                        <span>Wishlist</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="profile.html" class="tp-mobile-item-btn">
                        <i class="flaticon-user"></i>
                        <span>Account</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
                        <i class="flaticon-menu-1"></i>
                        <span>Menu</span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mobile menu area end -->

      <!-- search area start -->
      <section class="tp-search-area">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-search-form">
                     <div class="tp-search-close text-center mb-20">
                        <button class="tp-search-close-btn tp-search-close-btn"></button>
                     </div>
                     <form action="#">
                        <div class="tp-search-input mb-10">
                           <input type="text" placeholder="Search for product...">
                           <button type="submit"><i class="flaticon-search-1"></i></button>
                        </div>
                        <div class="tp-search-category">
                           <span>Search by : </span>
                           <a href="#">Men, </a>
                           <a href="#">Women, </a>
                           <a href="#">Children, </a>
                           <a href="#">Shirt, </a>
                           <a href="#">Demin</a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- search area end -->

      <!-- cart mini area start -->
      <div class="cartmini__area tp-all-font-roboto">
         <div class="cartmini__wrapper d-flex justify-content-between flex-column">
             <div class="cartmini__top-wrapper">
                 <div class="cartmini__top p-relative">
                     <div class="cartmini__top-title">
                         <h4>Shopping cart</h4>
                     </div>
                     <div class="cartmini__close">
                         <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
                     </div>
                 </div>
                 <div class="cartmini__shipping">
                  <p> Free Shipping for all orders over <span>$50</span></p>
                  <div class="progress">
                     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>                   
                 </div>
                 <div class="cartmini__widget">
                     <div class="cartmini__widget-item">
                         <div class="cartmini__thumb">
                           <a href="product-details.html">
                              <img src="assets/img/product/product-1.jpg" alt="">
                           </a>
                         </div>
                         <div class="cartmini__content">
                           <h5 class="cartmini__title"><a href="product-details.html">Level Bolt Smart Lock</a></h5>
                           <div class="cartmini__price-wrapper">
                              <span class="cartmini__price">$46.00</span>
                              <span class="cartmini__quantity">x2</span>
                           </div>
                         </div>
                         <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
                     </div>
                 </div>
                 <!-- for wp -->
                 <!-- if no item in cart -->
                 <div class="cartmini__empty text-center d-none">
                     <img src="assets/img/product/cartmini/empty-cart.png" alt="">
                     <p>Your Cart is empty</p>
                     <a href="shop.html" class="tp-btn">Go to Shop</a>
                 </div>
             </div>
             <div class="cartmini__checkout">
                 <div class="cartmini__checkout-title mb-30">
                     <h4>Subtotal:</h4>
                     <span>$113.00</span>
                 </div>
                 <div class="cartmini__checkout-btn">
                     <a href="cart.html" class="tp-btn mb-10 w-100"> view cart</a>
                     <a href="checkout.html" class="tp-btn tp-btn-border w-100"> checkout</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- cart mini area end -->

      <!-- header area start -->
      <header>
         <div class="tp-header-area p-relative z-index-11">
            <!-- header top start  -->
            <div class="tp-header-top black-bg p-relative z-index-1 d-none d-md-block">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <div class="tp-header-welcome d-flex align-items-center">
                           <span>
                              <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.6364 1H1V12.8182H14.6364V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M14.6364 5.54545H18.2727L21 8.27273V12.8182H14.6364V5.54545Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M5.0909 17.3636C6.3461 17.3636 7.36363 16.3461 7.36363 15.0909C7.36363 13.8357 6.3461 12.8182 5.0909 12.8182C3.83571 12.8182 2.81818 13.8357 2.81818 15.0909C2.81818 16.3461 3.83571 17.3636 5.0909 17.3636Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M16.9091 17.3636C18.1643 17.3636 19.1818 16.3461 19.1818 15.0909C19.1818 13.8357 18.1643 12.8182 16.9091 12.8182C15.6539 12.8182 14.6364 13.8357 14.6364 15.0909C14.6364 16.3461 15.6539 17.3636 16.9091 17.3636Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                 
                           </span>
                           <p>FREE Express Shipping On Orders $570+</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="tp-header-top-right d-flex align-items-center justify-content-end">
                           <div class="tp-header-top-menu d-flex align-items-center justify-content-end">
                              <div class="tp-header-top-menu-item tp-header-lang">
                                 <span class="tp-header-lang-toggle" id="tp-header-lang-toggle">English</span>
                                 <ul>
                                    <li>
                                       <a href="#">Spanish</a>
                                    </li>
                                    <li>
                                       <a href="#">Russian</a>
                                    </li>
                                    <li>
                                       <a href="#">Portuguese</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tp-header-top-menu-item tp-header-currency">
                                 <span class="tp-header-currency-toggle" id="tp-header-currency-toggle">USD</span>
                                 <ul>
                                    <li>
                                       <a href="#">EUR</a>
                                    </li>
                                    <li>
                                       <a href="#">CHF</a>
                                    </li>
                                    <li>
                                       <a href="#">GBP</a>
                                    </li>
                                    <li>
                                       <a href="#">KWD</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tp-header-top-menu-item tp-header-setting">
                                 <span class="tp-header-setting-toggle" id="tp-header-setting-toggle">Setting</span>
                                 <ul>
                                    <li>
                                       <a href="profile.html">My Profile</a>
                                    </li>
                                    <li>
                                       <a href="wishlist.html">Wishlist</a>
                                    </li>
                                    <li>
                                       <a href="cart.html">Cart</a>
                                    </li>
                                    <li>
                                       <a href="login.html">Logout</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- header main start -->
            <div class="tp-header-main tp-header-sticky">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                        <div class="logo">
                           <a href="index.html">
                              <img src="assets/img/logo/logo1.jpg" alt="" style="width: 160px; height: auto;">
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                        <div class="tp-header-search pl-70">
                           <form action="#">
                              <div class="tp-header-search-wrapper d-flex align-items-center">
                                 <div class="tp-header-search-box">
                                    <input type="text" placeholder="Search for Products...">
                                 </div>
                                 <div class="tp-header-search-category">
                                    <select>
                                       <option>Select Category</option>
                                       <option>Mobile</option>
                                       <option>Digital Watch</option>
                                       <option>Computer</option>
                                       <option>Watch</option>
                                    </select>
                                 </div>
                                 <div class="tp-header-search-btn">
                                    <button type="submit">
                                       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                          
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-3 col-md-8 col-6">
                        <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                           <div class="tp-header-login d-none d-lg-block">
                              <a href="{{ route('login') }}" class="d-flex align-items-center">
                                 <div class="tp-header-login-icon">
                                    <span>
                                       <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                       
                                    </span>
                                 </div>
                                 <div class="tp-header-login-content d-none d-xl-block">
                                    <span>Hello, Sign In</span>
                                    <h5 class="tp-header-login-title">Your Account</h5>
                                 </div>
                              </a>
                           </div>
                           <div class="tp-header-action d-flex align-items-center ml-50">
                              <div class="tp-header-action-item d-none d-lg-block">
                                 <a href="compare.html"  class="tp-header-action-btn">
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M14.8396 17.3319V3.71411" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M19.1556 13L15.0778 17.0967L11 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M4.91115 1.00056V14.6183" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M0.833496 5.09667L4.91127 1L8.98905 5.09667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                       
                                 </a>
                              </div>
                              <div class="tp-header-action-item d-none d-lg-block">
                                 <a href="wishlist.html" class="tp-header-action-btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                    <span class="tp-header-action-badge">4</span>                          
                                 </a>
                              </div>
                              <div class="tp-header-action-item">
                                 <button type="button" class="tp-header-action-btn cartmini-open-btn">
                                    <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                    <span class="tp-header-action-badge">13</span>                                                                          
                                 </button>
                              </div>
                              <div class="tp-header-action-item d-lg-none">
                                 <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                       <rect x="10" width="20" height="2" fill="currentColor"/>
                                       <rect x="5" y="7" width="25" height="2" fill="currentColor"/>
                                       <rect x="10" y="14" width="20" height="2" fill="currentColor"/>
                                    </svg>
                                 </button>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- header bottom start -->
            <div class="tp-header-bottom tp-header-bottom-border d-none d-lg-block">
               <div class="container">
                  <div class="tp-mega-menu-wrapper p-relative">
                     <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                           <div class="tp-header-category tp-category-menu tp-header-category-toggle">
                              <button class="tp-category-menu-btn tp-category-menu-toggle">
                                 <span>
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1C0 0.447715 0.447715 0 1 0H15C15.5523 0 16 0.447715 16 1C16 1.55228 15.5523 2 15 2H1C0.447715 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H1C0.447715 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447715 14 1 14H11C11.5523 14 12 13.5523 12 13C12 12.4477 11.5523 12 11 12H1Z" fill="currentColor"/>
                                    </svg>
                                 </span>     
                                 All Departments                            
                              </button>
                              <nav class="tp-category-menu-content">
                               <ul>
                                   <li>
                                      <a href="shop.html">
                                         <span>
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path d="M5.90532 14.8316V12.5719C5.9053 11.9971 6.37388 11.5301 6.95443 11.5262H9.08101C9.66434 11.5262 10.1372 11.9944 10.1372 12.5719V12.5719V14.8386C10.1371 15.3266 10.5305 15.7254 11.0233 15.7368H12.441C13.8543 15.7368 15 14.6026 15 13.2035V13.2035V6.77525C14.9925 6.22482 14.7314 5.70794 14.2911 5.37171L9.44253 1.50496C8.59311 0.83168 7.38562 0.83168 6.5362 1.50496L1.70886 5.37873C1.26693 5.7136 1.00544 6.23133 1 6.78227V13.2035C1 14.6026 2.1457 15.7368 3.55899 15.7368H4.97671C5.48173 15.7368 5.89114 15.3315 5.89114 14.8316V14.8316" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                         </span>
                                         New Arrivals</a>
                                   </li>
                                   <li class="has-dropdown">
                                      <a href="shop.html" class="has-mega-menu">
                                         <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path d="M2.6856 4.54975C2.6856 3.52014 3.51984 2.6859 4.54945 2.68508H5.3977C5.88984 2.68508 6.36136 2.48971 6.71089 2.14348L7.30359 1.54995C8.02984 0.819578 9.21031 0.816281 9.94068 1.54253L9.9415 1.54336L9.94892 1.54995L10.5425 2.14348C10.892 2.49053 11.3635 2.68508 11.8556 2.68508H12.7031C13.7327 2.68508 14.5677 3.51932 14.5677 4.54975V5.39636C14.5677 5.88849 14.7623 6.36084 15.1093 6.71037L15.7029 7.3039C16.4332 8.03015 16.4374 9.21061 15.7111 9.94098L15.7103 9.94181L15.7029 9.94923L15.1093 10.5428C14.7623 10.8915 14.5677 11.363 14.5677 11.8551V12.7034C14.5677 13.733 13.7335 14.5672 12.7039 14.5672H12.7031H11.854C11.3619 14.5672 10.8895 14.7626 10.5408 15.1096L9.94727 15.7024C9.22185 16.4327 8.04221 16.4368 7.31183 15.7122C7.31101 15.7114 7.31019 15.7106 7.30936 15.7098L7.30194 15.7024L6.70924 15.1096C6.36054 14.7626 5.88819 14.568 5.39605 14.5672H4.54945C3.51984 14.5672 2.6856 13.733 2.6856 12.7034V11.8535C2.6856 11.3613 2.49023 10.8898 2.14318 10.5411L1.55047 9.94758C0.820097 9.22215 0.815976 8.04251 1.5414 7.31214C1.5414 7.31132 1.54223 7.31049 1.54305 7.30967L1.55047 7.30225L2.14318 6.70872C2.49023 6.35919 2.6856 5.88767 2.6856 5.39471V4.54975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M6.50787 10.7453L10.745 6.50812" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M10.6823 10.6862H10.6897" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M6.56053 6.56446H6.56795" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                         </span>
                                         Electronics</a>
     
                                         <ul class="mega-menu tp-submenu">
                                            <li>
                                               <a href="shop.html" class="mega-menu-title">Featured</a>
                                               <ul>
                                                  <li>
                                                     <a href="shop.html"><img src="assets/img/header/menu/menu-1.jpg" alt=""></a>
                                                  </li>
                                                  <li>
                                                     <a href="shop.html">New Arrivals</a>
                                                  </li>
                                                  <li>
                                                     <a href="shop.html">Best Seller</a>
                                                  </li>
                                                  <li>
                                                     <a href="shop.html">Top Rated</a>
                                                  </li>
                                               </ul>
                                            </li>
     
                                            <li>
                                               <a href="shop.html" class="mega-menu-title">Computer & Laptops</a>
                                               <ul>
                                                  <li>
                                                   <a href="shop.html"><img src="assets/img/header/menu/menu-2.jpg" alt=""></a>
                                                  </li>
                                                  <li>
                                                     <a href="shop.html">Top Brands</a>
                                                  </li>
                                                  <li>
                                                     <a href="shop.html">Weekly Best Selling</a>
                                                  </li>
                                                  <li>
                                                     <a href="shop.html">Most Viewed</a>
                                                  </li>
                                               </ul>
                                            </li>
                                            <li>
                                               <a href="shop.html" class="mega-menu-title">Accessories</a>
                                               <ul>
                                                  <li>
                                                   <a href="shop.html"><img src="assets/img/header/menu/menu-3.jpg" alt=""></a>
                                                  </li>
                                                  <li>
                                                     <a href="shop.html">Headphones</a>
                                                  </li>
                                                  <li>
                                                     <a href="shop.html">TWS Earphone</a>
                                                  </li>
                                                  <li>
                                                     <a href="shop.html">Gaming Headset</a>
                                                  </li>
                                               </ul>
                                            </li>
     
                                         </ul>
                                   </li>
                                   <li>
                                      <a href="shop.html">
                                         <span>
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path d="M14.5 8.5V16H2.50003V8.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M16 4.75H1V8.5H16V4.75Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M8.5 16V4.75" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M8.49997 4.75H5.12497C4.62769 4.75 4.15077 4.55246 3.79914 4.20083C3.44751 3.84919 3.24997 3.37228 3.24997 2.875C3.24997 2.37772 3.44751 1.90081 3.79914 1.54917C4.15077 1.19754 4.62769 1 5.12497 1C7.74997 1 8.49997 4.75 8.49997 4.75Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M8.5 4.75H11.875C12.3723 4.75 12.8492 4.55246 13.2008 4.20083C13.5525 3.84919 13.75 3.37228 13.75 2.875C13.75 2.37772 13.5525 1.90081 13.2008 1.54917C12.8492 1.19754 12.3723 1 11.875 1C9.25 1 8.5 4.75 8.5 4.75Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                         </span>
                                         Gifts</a>
                                   </li>
                                   <li class="has-dropdown">
                                      <a href="shop.html">
                                         <span>
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path d="M14.5 1H2.5C1.67157 1 1 1.67157 1 2.5V10C1 10.8284 1.67157 11.5 2.5 11.5H14.5C15.3284 11.5 16 10.8284 16 10V2.5C16 1.67157 15.3284 1 14.5 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M5.5 14.5H11.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M8.5 11.5V14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                         </span>
                                         Computers</a>
     
                                         <ul class="tp-submenu">
                                            <li class="has-dropdown">
                                               <a href="shop.html">Desktop</a>
                                               <ul class="tp-submenu">
                                                  <li><a href="shop.html">Gaming</a></li>
                                                  <li><a href="shop.html">WorkSpace</a></li>
                                                  <li><a href="shop.html">Customize</a></li>
                                                  <li><a href="shop.html">Luxury</a></li>
                                               </ul>
                                            </li>
                                            <li><a href="shop.html">Laptop</a></li>
                                            <li><a href="shop.html">Console</a></li>
                                            <li><a href="shop.html">Top Rated</a></li>
                                         </ul>
                                   </li>
                                   <li>
                                      <a href="shop.html">
                                         <span>
                                            <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path d="M12.375 1H2.625C1.72754 1 1 1.72754 1 2.625V15.625C1 16.5225 1.72754 17.25 2.625 17.25H12.375C13.2725 17.25 14 16.5225 14 15.625V2.625C14 1.72754 13.2725 1 12.375 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M7.5 14H7.50875" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                         </span>
                                         Smartphones & Tablets</a>
                                   </li>
                                   <li>
                                      <a href="shop.html">
                                         <span>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1C13.4176 1 17 4.5816 17 9C17 13.4184 13.4176 17 9 17C4.5816 17 1 13.4184 1 9C1 4.5816 4.5816 1 9 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5263 8.99592C11.5263 8.31286 8.02529 6.12769 7.62814 6.5206C7.23099 6.9135 7.19281 11.0413 7.62814 11.4712C8.06348 11.9027 11.5263 9.67898 11.5263 8.99592Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                         </span>
                                         TV, Video & Musice</a>
                                   </li>
                                   <li>
                                      <a href="shop.html">
                                         <span>
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6292 1.26076C12.5027 1.60843 12.7699 2.81924 13.1271 3.20843C13.4843 3.59762 13.9955 3.72995 14.2783 3.72995C15.7814 3.72995 17 4.94854 17 6.45081V11.4627C17 13.4778 15.3654 15.1124 13.3503 15.1124H4.64973C2.63373 15.1124 1 13.4778 1 11.4627V6.45081C1 4.94854 2.21859 3.72995 3.72173 3.72995C4.00368 3.72995 4.51481 3.59762 4.87287 3.20843C5.23005 2.81924 5.49643 1.60843 6.36995 1.26076C7.24432 0.913081 10.7557 0.913081 11.6292 1.26076Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M13.7527 5.97314H13.7605" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7491 9.11086C11.7491 7.59215 10.5184 6.36145 8.99974 6.36145C7.48104 6.36145 6.25034 7.59215 6.25034 9.11086C6.25034 10.6296 7.48104 11.8603 8.99974 11.8603C10.5184 11.8603 11.7491 10.6296 11.7491 9.11086Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                         </span>
                                         Cameras</a>
                                   </li>
                                   <li>
                                      <a href="shop.html">
                                         <span>
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M2.30431 1C1.58423 1 1 1.59405 1 2.32534V3.10537C1 3.64706 1.20599 4.16798 1.57446 4.55981L5.61258 8.8536L5.61436 8.8509C6.39393 9.64899 6.83254 10.7279 6.83254 11.8528V15.6626C6.83254 15.9172 7.09891 16.0798 7.32 15.9597L9.61963 14.7066C9.96679 14.517 10.1834 14.1486 10.1834 13.7487V11.8428C10.1834 10.7242 10.6158 9.64989 11.3883 8.8536L15.4264 4.55981C15.794 4.16798 16 3.64706 16 3.10537V2.32534C16 1.59405 15.4167 1 14.6966 1H2.30431Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                         </span>
                                         Cooking</a>
                                   </li>
                                   <li>
                                      <a href="shop.html">
                                         <span>
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path d="M15.7462 7.16473V13.167C15.7462 13.6457 15.556 14.1049 15.2175 14.4434C14.8789 14.782 14.4197 14.9722 13.941 14.9722H4.3058C3.82703 14.9722 3.3679 14.782 3.02936 14.4434C2.69083 14.1049 2.50061 13.6457 2.50061 13.167V9.36255" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M3.46186 1.00001C3.18176 0.999863 2.90854 1.08659 2.6798 1.24825C2.45106 1.4099 2.27807 1.63852 2.18471 1.9026L1.11062 5.01655C0.713475 6.15382 1.41752 7.16021 2.71274 7.16021C3.18296 7.14863 3.64325 7.02257 4.05374 6.79294C4.46424 6.56331 4.81255 6.23705 5.0685 5.84243C5.20151 6.24071 5.46067 6.58479 5.80676 6.82258C6.15285 7.06036 6.56702 7.17889 6.98651 7.16021C7.18566 6.7642 7.4909 6.43132 7.86823 6.19871C8.24556 5.96611 8.68013 5.84294 9.1234 5.84294C9.56666 5.84294 10.0012 5.96611 10.3785 6.19871C10.7558 6.43132 11.0611 6.7642 11.2603 7.16021V7.16021C11.679 7.17789 12.0922 7.0589 12.4373 6.82119C12.7825 6.58348 13.041 6.23994 13.1738 5.84243C13.431 6.23686 13.7802 6.56288 14.1914 6.79243C14.6026 7.02199 15.0633 7.1482 15.5341 7.16021C16.8293 7.16021 17.5288 6.15382 17.1362 5.01655L16.0621 1.9026C15.9685 1.6378 15.7948 1.40866 15.5652 1.24694C15.3355 1.08522 15.0613 0.998927 14.7804 1.00001H3.46186Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M11.0707 14.9722H7.19861V11.4701C7.19861 10.983 7.3921 10.5158 7.73656 10.1713C8.08102 9.82685 8.54822 9.63333 9.03536 9.63333H9.22041C9.70755 9.63333 10.1747 9.82685 10.5192 10.1713C10.8637 10.5158 11.0572 10.983 11.0572 11.4701L11.0707 14.9722Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                         </span>
                                         Accessories</a>
                                   </li>
                                   <li>
                                      <a href="shop.html">
                                         <span>
                                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M6.92384 11.3525C10.1178 11.3525 12.8477 11.8365 12.8477 13.7698C12.8477 15.7032 10.136 16.201 6.92384 16.201C3.72902 16.201 1 15.7213 1 13.7871C1 11.8529 3.71084 11.3525 6.92384 11.3525Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path fill-rule="evenodd" clip-rule="evenodd" d="M6.92383 8.59311C4.82685 8.59311 3.1264 6.89354 3.1264 4.79656C3.1264 2.69958 4.82685 1 6.92383 1C9.01994 1 10.7204 2.69958 10.7204 4.79656C10.7282 6.88575 9.03986 8.58532 6.95067 8.59311H6.92383Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M12.8906 7.60761C14.2768 7.41281 15.3443 6.22319 15.3469 4.78336C15.3469 3.3643 14.3123 2.18681 12.9556 1.96429" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               <path d="M14.7195 10.9416C16.0623 11.1416 17 11.6126 17 12.5823C17 13.2498 16.5584 13.6827 15.845 13.9537" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                               </svg>
                                         </span>
                                         Sports</a>
                                   </li>
                                </ul>
                              </nav>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                           <div class="main-menu menu-style-1">
                              <nav class="tp-main-menu-content">
                                 <ul>
                                    <li class="has-dropdown has-mega-menu">
                                       <a href="index.html">Home</a>
                                       <div class="home-menu tp-submenu tp-mega-menu">
                                          <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-5">
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="index.html">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="assets/img/menu/menu-home-1.jpg" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Electronics </h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="index-2.html">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="assets/img/menu/menu-home-2.jpg" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Fashion</h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="index-3.html">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="assets/img/menu/menu-home-3.jpg" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Beauty</h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="index-4.html">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="assets/img/menu/menu-home-4.jpg" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Jewelry </h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="index-5.html">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="assets/img/menu/menu-home-5.jpg" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Grocery</h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li  class="has-dropdown has-mega-menu">
                                       <a href="shop.html">Shop</a>
                                       <div class="shop-mega-menu tp-submenu tp-mega-menu">
                                          <div class="row">
                                             <div class="col-lg-2">
                                                <div class="shop-mega-menu-list">
                                                      <a href="shop.html" class="shop-mega-menu-title">Shop Pages</a>
                                                      <ul>
                                                          <li><a href="shop-category.html">Grid Category</a></li>
                                                          <li><a href="shop.html">Grid Layout</a></li>
                                                          <li><a href="shop-list.html">List Layout</a></li>
                                                          <li><a href="shop-masonary.html">Masonary Layout</a></li>
                                                          <li><a href="shop-full-width.html">Full width Layout</a></li>
                                                          <li><a href="shop-1600.html">1600px Layout</a></li>
                                                          <li><a href="shop.html">Left Sidebar</a></li>
                                                          <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                          <li><a href="shop-no-sidebar.html">Hidden Sidebar</a></li>
                                                      </ul>
                                                </div>
                                             </div>
                                             <div class="col-lg-2">
                                                <div class="shop-mega-menu-list">
                                                      <a href="shop.html" class="shop-mega-menu-title">Features</a>
                                                      <ul>
                                                         <li><a href="shop-filter-dropdown.html">Filter Dropdown</a></li>
                                                         <li><a href="shop-filter-offcanvas.html">Filters Offcanvas</a></li>
                                                         <li><a href="shop.html">Filters Sidebar</a></li>
                                                         <li><a href="shop-load-more.html">Load More button</a></li>
                                                         <li><a href="shop-infinite-scroll.html">Infinit scrolling</a></li>
                                                         <li><a href="shop-list.html">Collections list</a></li>
                                                         <li><a href="shop.html">Hidden search</a></li>
                                                         <li><a href="shop.html">Search Full screen</a></li>
                                                      </ul>
                                                </div>
                                             </div>
                                             <div class="col-lg-2">
                                                <div class="shop-mega-menu-list">
                                                      <a href="shop.html" class="shop-mega-menu-title">Hover Style</a>
                                                      <ul>
                                                         <li><a href="shop.html">Hover Style 1</a></li>
                                                         <li><a href="shop.html">Hover Style 2</a></li>
                                                         <li><a href="shop.html">Hover Style 3</a></li>
                                                         <li><a href="shop.html">Hover Style 4</a></li>
                                                      </ul>
                                                </div>
                                             </div>
                                             <div class="col-lg-3">
                                                <div class="shop-mega-menu-img">
                                                   <img src="assets/img/menu/product/menu-product-img-1.jpg" alt="">
                                                   <div class="shop-mega-menu-btn">
                                                      <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Phones</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-3">
                                                <div class="shop-mega-menu-img">
                                                   <img src="assets/img/menu/product/menu-product-img-2.jpg" alt="">
                                                   <div class="shop-mega-menu-btn">
                                                      <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Cameras</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                   </li>
                                    <li class="has-dropdown has-mega-menu ">
                                       
                                       <a href="shop.html">Products</a>
                                       <ul class="tp-submenu tp-mega-menu mega-menu-style-2">
                                          <!-- first col -->
                                          <li class="has-dropdown">
                                             <a href="shop.html" class="mega-menu-title">Shop Page</a>
                                             <ul class="tp-submenu">
                                                <li><a href="shop-category.html">Only Categories</a></li>
                                                <li><a href="shop-filter-offcanvas.html">Shop Grid</a></li>
                                                <li><a href="shop.html">Shop Grid with Sideber</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shop-category.html">Categories</a></li>
                                                <li><a href="product-details.html">Product Details</a></li>
                                                <li><a href="product-details-progress.html">Product Details Progress</a></li>
                                             </ul>
                                          </li>
                                          <!-- third col -->
                                          <li  class="has-dropdown">
                                             <a href="product-details.html" class="mega-menu-title">Products</a>
                                             <ul class="tp-submenu">
                                                
                                                <li><a href="product-details.html">Product Simple</a></li>
                                                <li><a href="product-details-video.html">With Video</a></li>
                                                <li><a href="product-details-countdown.html">With Countdown Timer</a></li>
                                                <li><a href="product-details-presentation.html">Product Presentation</a></li>
                                                <li><a href="product-details-swatches.html">Variations Swatches</a></li>
                                                <li><a href="product-details-list.html">List View</a></li>
                                                <li><a href="product-details-gallery.html">Details Gallery</a></li>
                                                <li><a href="product-details-slider.html">With Slider</a></li>
                                             </ul>
                                          </li>
                                          <!-- third col -->
                                          <li  class="has-dropdown">
                                             <a href="shop.html" class="mega-menu-title">eCommerce</a>
                                             <ul class="tp-submenu">
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="order.html">Track Your Order</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="profile.html">My account</a></li>
                                             </ul>
                                          </li>

                                          <!-- second col -->
                                          <li  class="has-dropdown">
                                             <a href="shop.html" class="mega-menu-title">More Pages</a>
                                             <ul class="tp-submenu">
                                                
                                               
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="forgot.html">Forgot Password</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                             </ul>
                                          </li>

                                       </ul>
                                    </li>
                                    {{-- <li><a href="coupon.html">Coupons</a></li>
                                    <li class="has-dropdown">
                                       <a href="blog.html">Blog</a>
                                       <ul class="tp-submenu">
                                          <li><a href="blog.html">Blog Standard</a></li>
                                          <li><a href="blog-grid.html">Blog Grid</a></li>
                                          <li><a href="blog-list.html">Blog List</a></li>
                                          <li><a href="blog-details-2.html">Blog Details Full Width</a></li>
                                          <li><a href="blog-details.html">Blog Details</a></li>
                                       </ul>
                                    </li> --}}
                                    <li><a href="contact.html">Contact</a></li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                           <div class="tp-header-contact d-flex align-items-center justify-content-end">
                              <div class="tp-header-contact-icon">
                                 <span>
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M1.96977 3.24859C2.26945 2.75144 3.92158 0.946726 5.09889 1.00121C5.45111 1.03137 5.76246 1.24346 6.01544 1.49057H6.01641C6.59631 2.05874 8.26011 4.203 8.35352 4.65442C8.58411 5.76158 7.26378 6.39979 7.66756 7.5157C8.69698 10.0345 10.4707 11.8081 12.9908 12.8365C14.1058 13.2412 14.7441 11.9219 15.8513 12.1515C16.3028 12.2459 18.4482 13.9086 19.0155 14.4894V14.4894C19.2616 14.7414 19.4757 15.0537 19.5049 15.4059C19.5487 16.6463 17.6319 18.3207 17.2583 18.5347C16.3767 19.1661 15.2267 19.1544 13.8246 18.5026C9.91224 16.8749 3.65985 10.7408 2.00188 6.68096C1.3675 5.2868 1.32469 4.12906 1.96977 3.24859Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.936 1.23685C16.4432 1.62622 19.2124 4.39253 19.6065 7.89874" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.936 4.59337C14.6129 4.92021 15.9231 6.23042 16.2499 7.90726" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                    
                                 </span>
                              </div>
                              <div class="tp-header-contact-content">
                                 <h5>Hotline:</h5>
                                 <p><a href="tel:402-763-282-46">+(402) 763 282 46</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <div id="header-sticky-2" class="tp-header-sticky-area">
         <div class="container">
            <div class="tp-mega-menu-wrapper p-relative">
               <div class="row align-items-center">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                     <div class="logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo.svg" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                     <div class="tp-header-sticky-menu main-menu menu-style-1">
                        <nav id="mobile-menu"> 
                           <ul>
                              <li class="has-dropdown has-mega-menu">
                                 <a href="index.html">Home</a>
                                 <div class="home-menu tp-submenu tp-mega-menu">
                                    <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-5">
                                       <div class="col">
                                          <div class="home-menu-item ">
                                             <a href="index.html">
                                                <div class="home-menu-thumb p-relative fix">
                                                   <img src="assets/img/menu/menu-home-1.jpg" alt="">
                                                </div>
                                                <div class="home-menu-content">
                                                   <h5 class="home-menu-title">Electronics </h5>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="home-menu-item ">
                                             <a href="index-2.html">
                                                <div class="home-menu-thumb p-relative fix">
                                                   <img src="assets/img/menu/menu-home-2.jpg" alt="">
                                                </div>
                                                <div class="home-menu-content">
                                                   <h5 class="home-menu-title">Fashion</h5>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="home-menu-item ">
                                             <a href="index-3.html">
                                                <div class="home-menu-thumb p-relative fix">
                                                   <img src="assets/img/menu/menu-home-3.jpg" alt="">
                                                </div>
                                                <div class="home-menu-content">
                                                   <h5 class="home-menu-title">Beauty</h5>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="home-menu-item ">
                                             <a href="index-4.html">
                                                <div class="home-menu-thumb p-relative fix">
                                                   <img src="assets/img/menu/menu-home-4.jpg" alt="">
                                                </div>
                                                <div class="home-menu-content">
                                                   <h5 class="home-menu-title">Jewelry </h5>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="home-menu-item ">
                                             <a href="index-5.html">
                                                <div class="home-menu-thumb p-relative fix">
                                                   <img src="assets/img/menu/menu-home-5.jpg" alt="">
                                                </div>
                                                <div class="home-menu-content">
                                                   <h5 class="home-menu-title">Grocery</h5>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li  class="has-dropdown has-mega-menu">
                                 <a href="shop.html">Shop</a>
                                 <div class="shop-mega-menu tp-submenu tp-mega-menu">
                                    <div class="row">
                                       <div class="col-lg-2">
                                          <div class="shop-mega-menu-list">
                                                <a href="shop.html" class="shop-mega-menu-title">Shop Pages</a>
                                                <ul>
                                                    <li><a href="shop-category.html">Grid Category</a></li>
                                                    <li><a href="shop.html">Grid Layout</a></li>
                                                    <li><a href="shop-list.html">List Layout</a></li>
                                                    <li><a href="shop-masonary.html">Masonary Layout</a></li>
                                                    <li><a href="shop-full-width.html">Full width Layout</a></li>
                                                    <li><a href="shop-1600.html">1600px Layout</a></li>
                                                    <li><a href="shop.html">Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="shop-no-sidebar.html">Hidden Sidebar</a></li>
                                                </ul>
                                          </div>
                                       </div>
                                       <div class="col-lg-2">
                                          <div class="shop-mega-menu-list">
                                                <a href="shop.html" class="shop-mega-menu-title">Features</a>
                                                <ul>
                                                   <li><a href="shop-filter-dropdown.html">Filter Dropdown</a></li>
                                                   <li><a href="shop-filter-offcanvas.html">Filters Offcanvas</a></li>
                                                   <li><a href="shop.html">Filters Sidebar</a></li>
                                                   <li><a href="shop-load-more.html">Load More button</a></li>
                                                   <li><a href="shop-infinite-scroll.html">Infinit scrolling</a></li>
                                                   <li><a href="shop-list.html">Collections list</a></li>
                                                   <li><a href="shop.html">Hidden search</a></li>
                                                   <li><a href="shop.html">Search Full screen</a></li>
                                                </ul>
                                          </div>
                                       </div>
                                       <div class="col-lg-2">
                                          <div class="shop-mega-menu-list">
                                                <a href="shop.html" class="shop-mega-menu-title">Hover Style</a>
                                                <ul>
                                                   <li><a href="shop.html">Hover Style 1</a></li>
                                                   <li><a href="shop.html">Hover Style 2</a></li>
                                                   <li><a href="shop.html">Hover Style 3</a></li>
                                                   <li><a href="shop.html">Hover Style 4</a></li>
                                                </ul>
                                          </div>
                                       </div>
                                       <div class="col-lg-3">
                                          <div class="shop-mega-menu-img">
                                             <img src="assets/img/menu/product/menu-product-img-1.jpg" alt="">
                                             <div class="shop-mega-menu-btn">
                                                <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Phones</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-3">
                                          <div class="shop-mega-menu-img">
                                             <img src="assets/img/menu/product/menu-product-img-2.jpg" alt="">
                                             <div class="shop-mega-menu-btn">
                                                <a href="shop-category.html" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Cameras</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                             </li>
                              <li class="has-dropdown has-mega-menu ">
                                 
                                 <a href="shop.html">Products</a>
                                 <ul class="tp-submenu tp-mega-menu mega-menu-style-2">
                                    <!-- first col -->
                                    <li class="has-dropdown">
                                       <a href="shop.html" class="mega-menu-title">Shop Page</a>
                                       <ul class="tp-submenu">
                                          <li><a href="shop-category.html">Only Categories</a></li>
                                          <li><a href="shop-filter-offcanvas.html">Shop Grid</a></li>
                                          <li><a href="shop.html">Shop Grid with Sideber</a></li>
                                          <li><a href="shop-list.html">Shop List</a></li>
                                          <li><a href="shop-category.html">Categories</a></li>
                                          <li><a href="product-details.html">Product Details</a></li>
                                          <li><a href="product-details-progress.html">Product Details Progress</a></li>
                                       </ul>
                                    </li>
                                    <!-- third col -->
                                    <li  class="has-dropdown">
                                       <a href="product-details.html" class="mega-menu-title">Products</a>
                                       <ul class="tp-submenu">
                                          
                                          <li><a href="product-details.html">Product Simple</a></li>
                                          <li><a href="product-details-video.html">With Video</a></li>
                                          <li><a href="product-details-countdown.html">With Countdown Timer</a></li>
                                          <li><a href="product-details-presentation.html">Product Presentation</a></li>
                                          <li><a href="product-details-swatches.html">Variations Swatches</a></li>
                                          <li><a href="product-details-list.html">List View</a></li>
                                          <li><a href="product-details-gallery.html">Details Gallery</a></li>
                                          <li><a href="product-details-slider.html">With Slider</a></li>
                                       </ul>
                                    </li>
                                    <!-- third col -->
                                    <li  class="has-dropdown">
                                       <a href="shop.html" class="mega-menu-title">eCommerce</a>
                                       <ul class="tp-submenu">
                                          <li><a href="cart.html">Shopping Cart</a></li>
                                          <li><a href="order.html">Track Your Order</a></li>
                                          <li><a href="compare.html">Compare</a></li>
                                          <li><a href="wishlist.html">Wishlist</a></li>
                                          <li><a href="checkout.html">Checkout</a></li>
                                          <li><a href="profile.html">My account</a></li>
                                       </ul>
                                    </li>

                                    <!-- second col -->
                                    <li  class="has-dropdown">
                                       <a href="shop.html" class="mega-menu-title">More Pages</a>
                                       <ul class="tp-submenu">
                                          
                                         
                                          <li><a href="about.html">About</a></li>
                                          <li><a href="login.html">Login</a></li>
                                          <li><a href="register.html">Register</a></li>
                                          <li><a href="forgot.html">Forgot Password</a></li>
                                          <li><a href="404.html">404 Error</a></li>
                                       </ul>
                                    </li>

                                 </ul>
                              </li>
                              <li><a href="coupon.html">Coupons</a></li>
                              <li class="has-dropdown">
                                 <a href="blog.html">Blog</a>
                                 <ul class="tp-submenu">
                                    <li><a href="blog.html">Blog Standard</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-details-2.html">Blog Details Full Width</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                 </ul>
                              </li>
                              <li><a href="contact.html">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                     <div class="tp-header-action d-flex align-items-center justify-content-end ml-50">
                        <div class="tp-header-action-item d-none d-lg-block">
                           <a href="compare.html"  class="tp-header-action-btn">
                              <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.8396 17.3319V3.71411" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M19.1556 13L15.0778 17.0967L11 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M4.91115 1.00056V14.6183" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M0.833496 5.09667L4.91127 1L8.98905 5.09667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                       
                           </a>
                        </div>
                        <div class="tp-header-action-item d-none d-lg-block">
                           <a href="wishlist.html" class="tp-header-action-btn">
                              <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg> 
                              <span class="tp-header-action-badge">4</span>                          
                           </a>
                        </div>
                        <div class="tp-header-action-item">
                           <button type="button" class="tp-header-action-btn cartmini-open-btn">
                              <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>    
                              <span class="tp-header-action-badge">13</span>                                                                          
                           </button>
                        </div>
                        <div class="tp-header-action-item d-lg-none">
                           <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                 <rect x="10" width="20" height="2" fill="currentColor"/>
                                 <rect x="5" y="7" width="25" height="2" fill="currentColor"/>
                                 <rect x="10" y="14" width="20" height="2" fill="currentColor"/>
                              </svg>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <main>

         <!-- slider area start -->
         <section class="tp-slider-area p-relative z-index-1">
            <div class="tp-slider-active tp-slider-variation swiper-container">
               <div class="swiper-wrapper">
                  <div class="tp-slider-item tp-slider-height d-flex align-items-center swiper-slide green-dark-bg">
                     <div class="tp-slider-shape">
                        <img class="tp-slider-shape-1" src="assets/img/slider/shape/slider-shape-1.png" alt="slider-shape">
                        <img class="tp-slider-shape-2" src="assets/img/slider/shape/slider-shape-2.png" alt="slider-shape">
                        <img class="tp-slider-shape-3" src="assets/img/slider/shape/slider-shape-3.png" alt="slider-shape">
                        <img class="tp-slider-shape-4" src="assets/img/slider/shape/slider-shape-4.png" alt="slider-shape">
                     </div>
                     <div class="container">
                        <div class="row align-items-center">
                           <div class="col-xl-5 col-lg-6 col-md-6">
                              <div class="tp-slider-content p-relative z-index-1">
                                 <span>Starting at <b>$274.00</b></span>
                                 <h3 class="tp-slider-title">The best tablet Collection 2023</h3>
                                 <p>Exclusive offer 
                                    <span>-35% 
                                       <svg width="94" height="20" viewBox="0 0 94 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M74.8576 4.63367L78.6048 5.11367C80.9097 5.35155 82.8309 5.75148 84.4483 5.97993L86.6581 6.31091L88.4262 6.63948C89.4684 6.81761 90.2699 6.9312 90.8805 6.99186C93.3213 7.24888 92.7011 6.63674 92.8183 6.12534C92.9355 5.61394 93.7175 5.37081 91.3267 4.45886C90.73 4.24001 89.9345 3.97481 88.8826 3.65818L87.1034 3.12577L84.8643 2.63282C83.236 2.28025 81.2402 1.82307 78.8684 1.52138L75.0177 0.981633C73.6188 0.823014 72.1417 0.730003 70.5389 0.582533C63.0297 0.0282543 55.4847 0.193022 48.0068 1.07459C39.9065 2.04304 31.9328 3.87384 24.2213 6.53586C18.0824 8.61764 12.1674 11.3089 6.56479 14.5692C4.88189 15.5255 3.25403 16.5756 1.68892 17.7145C0.568976 18.5077 -0.00964231 18.9932 0.0547097 19.0858C0.388606 19.6584 10.6194 13.1924 25.151 8.99361C32.789 6.72748 40.6283 5.20536 48.5593 4.44848C55.8569 3.76455 63.1992 3.69678 70.5082 4.24591L74.8223 4.62335" fill="currentColor"/>
                                       </svg>
                                    </span>
                                 off this week</p>
   
                                 <div class="tp-slider-btn">
                                    <a href="shop.html" class="tp-btn tp-btn-2 tp-btn-white">Shop Now
                                       <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-7 col-lg-6 col-md-6">
                              <div class="tp-slider-thumb text-end">
                                 <img src="assets/img/slider/slider-img-1.png" alt="slider-img">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tp-slider-item tp-slider-height d-flex align-items-center swiper-slide green-dark-bg" >
                     <div class="tp-slider-shape">
                        <img class="tp-slider-shape-1" src="assets/img/slider/shape/slider-shape-1.png" alt="slider-shape">
                        <img class="tp-slider-shape-2" src="assets/img/slider/shape/slider-shape-2.png" alt="slider-shape">
                        <img class="tp-slider-shape-3" src="assets/img/slider/shape/slider-shape-3.png" alt="slider-shape">
                        <img class="tp-slider-shape-4" src="assets/img/slider/shape/slider-shape-4.png" alt="slider-shape">
                     </div>
                     <div class="container">
                        <div class="row align-items-center">
                           <div class="col-xl-5 col-lg-6 col-md-6">
                              <div class="tp-slider-content p-relative z-index-1">
                                 <span>Starting at <b>$999.00</b></span>
                                 <h3 class="tp-slider-title">The best note book collection 2023</h3>
                                 <p>Exclusive offer 
                                    <span>-10% 
                                       <svg width="94" height="20" viewBox="0 0 94 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M74.8576 4.63367L78.6048 5.11367C80.9097 5.35155 82.8309 5.75148 84.4483 5.97993L86.6581 6.31091L88.4262 6.63948C89.4684 6.81761 90.2699 6.9312 90.8805 6.99186C93.3213 7.24888 92.7011 6.63674 92.8183 6.12534C92.9355 5.61394 93.7175 5.37081 91.3267 4.45886C90.73 4.24001 89.9345 3.97481 88.8826 3.65818L87.1034 3.12577L84.8643 2.63282C83.236 2.28025 81.2402 1.82307 78.8684 1.52138L75.0177 0.981633C73.6188 0.823014 72.1417 0.730003 70.5389 0.582533C63.0297 0.0282543 55.4847 0.193022 48.0068 1.07459C39.9065 2.04304 31.9328 3.87384 24.2213 6.53586C18.0824 8.61764 12.1674 11.3089 6.56479 14.5692C4.88189 15.5255 3.25403 16.5756 1.68892 17.7145C0.568976 18.5077 -0.00964231 18.9932 0.0547097 19.0858C0.388606 19.6584 10.6194 13.1924 25.151 8.99361C32.789 6.72748 40.6283 5.20536 48.5593 4.44848C55.8569 3.76455 63.1992 3.69678 70.5082 4.24591L74.8223 4.62335" fill="currentColor"/>
                                       </svg>
                                    </span>
                                 off this week</p>
   
                                 <div class="tp-slider-btn">
                                    <a href="shop.html" class="tp-btn tp-btn-2 tp-btn-white">Shop Now
                                       <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-7 col-lg-6 col-md-6">
                              <div class="tp-slider-thumb text-end">
                                 <img src="assets/img/slider/slider-img-2.png" alt="slider-img">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tp-slider-item is-light tp-slider-height d-flex align-items-center swiper-slide" data-bg-color="#E3EDF6">
                     <div class="tp-slider-shape">
                        <img class="tp-slider-shape-1" src="assets/img/slider/shape/slider-shape-1.png" alt="slider-shape">
                        <img class="tp-slider-shape-2" src="assets/img/slider/shape/slider-shape-2.png" alt="slider-shape">
                        <img class="tp-slider-shape-3" src="assets/img/slider/shape/slider-shape-3.png" alt="slider-shape">
                        <img class="tp-slider-shape-4" src="assets/img/slider/shape/slider-shape-4.png" alt="slider-shape">
                     </div>
                     <div class="container">
                        <div class="row align-items-center">
                           <div class="col-xl-5 col-lg-6 col-md-6">
                              <div class="tp-slider-content p-relative z-index-1">
                                 <span>Starting at <b>$999.00</b></span>
                                 <h3 class="tp-slider-title">The best note book collection 2023</h3>
                                 <p>Exclusive offer 
                                    <span>-10% 
                                       <svg width="94" height="20" viewBox="0 0 94 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M74.8576 4.63367L78.6048 5.11367C80.9097 5.35155 82.8309 5.75148 84.4483 5.97993L86.6581 6.31091L88.4262 6.63948C89.4684 6.81761 90.2699 6.9312 90.8805 6.99186C93.3213 7.24888 92.7011 6.63674 92.8183 6.12534C92.9355 5.61394 93.7175 5.37081 91.3267 4.45886C90.73 4.24001 89.9345 3.97481 88.8826 3.65818L87.1034 3.12577L84.8643 2.63282C83.236 2.28025 81.2402 1.82307 78.8684 1.52138L75.0177 0.981633C73.6188 0.823014 72.1417 0.730003 70.5389 0.582533C63.0297 0.0282543 55.4847 0.193022 48.0068 1.07459C39.9065 2.04304 31.9328 3.87384 24.2213 6.53586C18.0824 8.61764 12.1674 11.3089 6.56479 14.5692C4.88189 15.5255 3.25403 16.5756 1.68892 17.7145C0.568976 18.5077 -0.00964231 18.9932 0.0547097 19.0858C0.388606 19.6584 10.6194 13.1924 25.151 8.99361C32.789 6.72748 40.6283 5.20536 48.5593 4.44848C55.8569 3.76455 63.1992 3.69678 70.5082 4.24591L74.8223 4.62335" fill="currentColor"/>
                                       </svg>
                                    </span>
                                 off this week</p>
   
                                 <div class="tp-slider-btn">
                                    <a href="shop.html" class="tp-btn tp-btn-2 tp-btn-white">Shop Now
                                       <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-7 col-lg-6 col-md-6">
                              <div class="tp-slider-thumb text-end">
                                 <img src="assets/img/slider/slider-img-3.png" alt="slider-img">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tp-slider-arrow tp-swiper-arrow d-none d-lg-block">
                  <button type="button" class="tp-slider-button-prev">
                     <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>                        
                  </button>
                  <button type="button" class="tp-slider-button-next">
                     <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>                        
                  </button>
               </div>
               <div class="tp-slider-dot tp-swiper-dot"></div>
            </div>
         </section>
         <!-- slider area end -->

         <!-- product category area start -->
         <section class="tp-product-category pt-60 pb-15">
            <div class="container">
               <div class="row row-cols-xl-5 row-cols-lg-5 row-cols-md-4">
                  <div class="col">
                     <div class="tp-product-category-item text-center mb-40">
                        <div class="tp-product-category-thumb fix">
                           <a href="shop-category.html">
                              <img src="assets/img/product/category/product-cat-1.png" alt="product-category">
                           </a>
                        </div>
                        <div class="tp-product-category-content">
                           <h3 class="tp-product-category-title">
                              <a href="shop-category.html">Headphones</a>
                           </h3>
                           <p>20 Product</p>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="tp-product-category-item text-center mb-40">
                        <div class="tp-product-category-thumb fix">
                           <a href="shop-category.html">
                              <img src="assets/img/product/category/product-cat-2.png" alt="product-category">
                           </a>
                        </div>
                        <div class="tp-product-category-content">
                           <h3 class="tp-product-category-title">
                              <a href="shop-category.html">Mobile Phone</a>
                           </h3>
                           <p>25 Product</p>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="tp-product-category-item text-center mb-40">
                        <div class="tp-product-category-thumb fix">
                           <a href="shop-category.html">
                              <img src="assets/img/product/category/product-cat-3.png" alt="product-category">
                           </a>
                        </div>
                        <div class="tp-product-category-content">
                           <h3 class="tp-product-category-title">
                              <a href="shop-category.html">CPU Heat Pipes</a>
                           </h3>
                           <p>57 Product</p>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="tp-product-category-item text-center mb-40">
                        <div class="tp-product-category-thumb fix">
                           <a href="shop-category.html">
                              <img src="assets/img/product/category/product-cat-4.png" alt="product-category">
                           </a>
                        </div>
                        <div class="tp-product-category-content">
                           <h3 class="tp-product-category-title">
                              <a href="shop-category.html">Smart Watch</a>
                           </h3>
                           <p>44 Product</p>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="tp-product-category-item text-center mb-40">
                        <div class="tp-product-category-thumb fix">
                           <a href="shop-category.html">
                              <img src="assets/img/product/category/product-cat-5.png" alt="product-category">
                           </a>
                        </div>
                        <div class="tp-product-category-content">
                           <h3 class="tp-product-category-title">
                              <a href="shop-category.html">With Bluetooth </a>
                           </h3>
                           <p>81 Product</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- product category area end -->

         <!-- feature area start -->
         <section class="tp-feature-area tp-feature-border-radius pb-70">
            <div class="container">
               <div class="row gx-1 gy-1 gy-xl-0">
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="tp-feature-item d-flex align-items-start">
                        <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="33" height="27" viewBox="0 0 33 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.7222 1H31.5555V19.0556H10.7222V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M10.7222 7.94446H5.16667L1.00001 12.1111V19.0556H10.7222V7.94446Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M25.3055 26C23.3879 26 21.8333 24.4454 21.8333 22.5278C21.8333 20.6101 23.3879 19.0555 25.3055 19.0555C27.2232 19.0555 28.7778 20.6101 28.7778 22.5278C28.7778 24.4454 27.2232 26 25.3055 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.25001 26C5.33235 26 3.77778 24.4454 3.77778 22.5278C3.77778 20.6101 5.33235 19.0555 7.25001 19.0555C9.16766 19.0555 10.7222 20.6101 10.7222 22.5278C10.7222 24.4454 9.16766 26 7.25001 26Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                                        
                           </span>
                        </div>
                        <div class="tp-feature-content">
                           <h3 class="tp-feature-title">Free Delivary</h3>
                           <p>Orders from all item</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="tp-feature-item d-flex align-items-start">
                        <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="21" height="35" viewBox="0 0 21 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M10.3636 1V34" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M17.8636 7H6.61365C5.22126 7 3.8859 7.55312 2.90134 8.53769C1.91677 9.52226 1.36365 10.8576 1.36365 12.25C1.36365 13.6424 1.91677 14.9777 2.90134 15.9623C3.8859 16.9469 5.22126 17.5 6.61365 17.5H14.1136C15.506 17.5 16.8414 18.0531 17.826 19.0377C18.8105 20.0223 19.3636 21.3576 19.3636 22.75C19.3636 24.1424 18.8105 25.4777 17.826 26.4623C16.8414 27.4469 15.506 28 14.1136 28H1.36365" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                                        
                           </span>
                        </div>
                        <div class="tp-feature-content">
                           <h3 class="tp-feature-title">Return & Refunf</h3>
                           <p>Maney back guarantee</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="tp-feature-item d-flex align-items-start">
                        <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <mask id="mask0_1211_583" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="31" height="30">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H30.0024V29.9998H0V0Z" fill="white"/>
                                 </mask>
                                 <g mask="url(#mask0_1211_583)">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4168 27.1116C14.3017 27.9756 15.7266 27.9651 16.6056 27.0816L17.6885 26.0017C18.5285 25.1632 19.6894 24.6848 20.8728 24.6848H22.4178C23.6687 24.6848 24.6856 23.6678 24.6856 22.4184V20.875C24.6856 19.6736 25.1506 18.5441 25.9995 17.6937L27.0795 16.6122C27.519 16.1713 27.7544 15.5998 27.7529 14.9938C27.7514 14.3894 27.513 13.8209 27.0825 13.3919L26.001 12.309C25.1506 11.4525 24.6856 10.3246 24.6856 9.12318V7.58277C24.6856 6.33184 23.6687 5.3149 22.4178 5.3149H20.8758C19.6744 5.3149 18.545 4.84842 17.6945 4.00397L16.6116 2.91954C15.7101 2.02709 14.2717 2.03159 13.3913 2.91804L12.3128 3.99947C11.4519 4.84992 10.3225 5.3149 9.12553 5.3149H7.58212C6.33269 5.3164 5.31575 6.33334 5.31575 7.58277V9.12018C5.31575 10.3216 4.84927 11.451 4.00332 12.303L2.93839 13.3694C2.92789 13.3814 2.91739 13.3904 2.90689 13.4009C2.02644 14.2874 2.03094 15.7258 2.91739 16.6062L4.00032 17.6892C4.84927 18.5411 5.31575 19.6706 5.31575 20.872V22.4184C5.31575 23.6678 6.33119 24.6848 7.58212 24.6848H9.12253C10.3255 24.6863 11.4549 25.1527 12.3053 26.0002L13.3868 27.0786C13.3958 27.0891 13.4063 27.0996 13.4168 27.1116ZM14.9972 30.0002C13.8468 30.0002 12.6963 29.5652 11.8159 28.6923C11.8039 28.6803 11.7919 28.6683 11.7799 28.6548L10.715 27.5914C10.2905 27.1699 9.72352 26.9359 9.12055 26.9344H7.58164C5.09029 26.9344 3.06541 24.908 3.06541 22.4182V20.8717C3.06541 20.2688 2.82992 19.7033 2.40694 19.2773L1.32851 18.2004C-0.423392 16.4575 -0.444391 13.6197 1.27601 11.8498C1.28951 11.8363 1.30301 11.8228 1.31651 11.8093L2.40844 10.7143C2.82992 10.2899 3.06541 9.72139 3.06541 9.11993V7.58252C3.06541 5.09266 5.09029 3.06628 7.58014 3.06478H9.12505C9.72652 3.06478 10.2935 2.82929 10.724 2.40482L11.7964 1.32938C13.5498 -0.436017 16.4161 -0.445016 18.1845 1.31288L19.281 2.40932C19.7054 2.83079 20.2724 3.06478 20.8754 3.06478H22.4173C24.9086 3.06478 26.935 5.09116 26.935 7.58252V9.12293C26.935 9.72439 27.169 10.2929 27.5935 10.7203L28.6704 11.7988C29.5239 12.6462 29.9978 13.7787 30.0023 14.9861C30.0068 16.1935 29.5404 17.329 28.6899 18.1854L27.5905 19.2818C27.169 19.7063 26.935 20.2718 26.935 20.8747V22.4182C26.935 24.908 24.9086 26.9344 22.4188 26.9344H20.8724C20.2784 26.9344 19.6979 27.1744 19.2765 27.5929L18.1995 28.6698C17.3191 29.5562 16.1581 30.0002 14.9972 30.0002Z" fill="currentColor"/>
                                 </g>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.145 19.9811C10.857 19.9811 10.569 19.8716 10.3501 19.6511C9.91058 19.2116 9.91058 18.5006 10.3501 18.0612L18.0596 10.3501C18.4991 9.91064 19.2115 9.91064 19.651 10.3501C20.0905 10.7896 20.0905 11.502 19.651 11.9415L11.94 19.6511C11.721 19.8716 11.433 19.9811 11.145 19.9811Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7544 20.2476C17.925 20.2476 17.247 19.5772 17.247 18.7477C17.247 17.9183 17.9115 17.2478 18.7409 17.2478H18.7544C19.5839 17.2478 20.2543 17.9183 20.2543 18.7477C20.2543 19.5772 19.5839 20.2476 18.7544 20.2476Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2548 12.748C10.4254 12.748 9.74744 12.0775 9.74744 11.2481C9.74744 10.4186 10.4119 9.74817 11.2413 9.74817H11.2548C12.0843 9.74817 12.7548 10.4186 12.7548 11.2481C12.7548 12.0775 12.0843 12.748 11.2548 12.748Z" fill="currentColor"/>
                              </svg>                                                                                        
                           </span>
                        </div>
                        <div class="tp-feature-content">
                           <h3 class="tp-feature-title">Member Discount</h3>
                           <p>Onevery order over $140.00</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                     <div class="tp-feature-item d-flex align-items-start">
                        <div class="tp-feature-icon mr-15">
                           <span>
                              <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.5 24.3333V15C1.5 11.287 2.975 7.72602 5.60051 5.10051C8.22602 2.475 11.787 1 15.5 1C19.213 1 22.774 2.475 25.3995 5.10051C28.025 7.72602 29.5 11.287 29.5 15V24.3333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M29.5 25.8889C29.5 26.714 29.1722 27.5053 28.5888 28.0888C28.0053 28.6722 27.214 29 26.3889 29H24.8333C24.0082 29 23.2169 28.6722 22.6335 28.0888C22.05 27.5053 21.7222 26.714 21.7222 25.8889V21.2222C21.7222 20.3971 22.05 19.6058 22.6335 19.0223C23.2169 18.4389 24.0082 18.1111 24.8333 18.1111H29.5V25.8889ZM1.5 25.8889C1.5 26.714 1.82778 27.5053 2.41122 28.0888C2.99467 28.6722 3.78599 29 4.61111 29H6.16667C6.99179 29 7.78311 28.6722 8.36656 28.0888C8.95 27.5053 9.27778 26.714 9.27778 25.8889V21.2222C9.27778 20.3971 8.95 19.6058 8.36656 19.0223C7.78311 18.4389 6.99179 18.1111 6.16667 18.1111H1.5V25.8889Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                                                                       
                           </span>
                        </div>
                        <div class="tp-feature-content">
                           <h3 class="tp-feature-title">Support 24/7</h3>
                           <p>Contact us 24 hours a day</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- feature area end -->

         <!-- product area start -->
         <section class="tp-product-area pb-55">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xl-5 col-lg-6 col-md-5">
                     <div class="tp-section-title-wrapper mb-40">
                        <h3 class="tp-section-title">Trending Products 

                           <svg width="114" height="35" viewBox="0 0 114 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053" stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                           </svg>
                        </h3>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-6 col-md-7">
                     <div class="tp-product-tab tp-product-tab-border mb-45 tp-tab d-flex justify-content-md-end">
                        <ul class="nav nav-tabs justify-content-sm-end" id="productTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new-tab-pane" type="button" role="tab" aria-controls="new-tab-pane" aria-selected="true">New
                              <span class="tp-product-tab-line">
                                 <svg width="52" height="13" viewBox="0 0 52 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635" stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                                    </svg>
                              </span>
                              </button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured-tab-pane" type="button" role="tab" aria-controls="featured-tab-pane" aria-selected="false">Featured
                              <span class="tp-product-tab-line">
                                 <svg width="52" height="13" viewBox="0 0 52 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635" stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                                    </svg>
                              </span>
                              </button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="topsell-tab" data-bs-toggle="tab" data-bs-target="#topsell-tab-pane" type="button" role="tab" aria-controls="topsell-tab-pane" aria-selected="false">Top Sellers
                              <span class="tp-product-tab-line">
                                 <svg width="52" height="13" viewBox="0 0 52 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 8.97127C11.6061 -5.48521 33 3.99996 51 11.4635" stroke="currentColor" stroke-width="2" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                                 </svg>
                              </span>
                              </button>
                           </li>
                        </ul>                         
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-product-tab-content">
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="new-tab-pane" role="tabpanel" aria-labelledby="new-tab" tabindex="0">
                              <div class="row">
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item p-relative transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-1.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-hot">Hot</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                   </svg>   
                                                      
                                                   <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Tablet</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Galaxy Tab S6 Lite 10.4-inch Android Tablet 128GB.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(7 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$320.00</span>
                                             <span class="tp-product-price new-price">$247.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-2.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-trending">Trending</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Smart Watch</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Tracker with IP67 Waterproof Pedometer Smart watch.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(6 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$72.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-3.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-offer">-25%</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Headphone</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Cancelling Headphones Wireless.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(5 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$1400.00</span>
                                             <span class="tp-product-price new-price">$120.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-4.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">HD Camera</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Professional Camera 4K Digital Video Camera.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(15 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$475.00</span>
                                             <span class="tp-product-price new-price">$340.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-trending">Trending</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Powerbank</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Mini Portable PD 22.5W Fast Charging Powerbank.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(6 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$72.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5-1.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Heat Pipes</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                CPU Cooler 2 Heat Pipes 12mm 4 Pin PWM RGB for Intel.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$133.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5-2.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-sale">Sale</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Gaming</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Playstation 4 2TB Slim Gaming Console.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$142.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5-3.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-hot">Hot</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Backpacks</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Mini Portable Mobile Phone Powerbank for iphone.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$120.00</span>
                                             <span class="tp-product-price new-price">$97.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="featured-tab-pane" role="tabpanel" aria-labelledby="featured-tab" tabindex="0">
                              <div class="row">
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-trending">Trending</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Powerbank</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Mini Portable PD 22.5W Fast Charging Powerbank.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(6 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$72.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5-1.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Heat Pipes</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                CPU Cooler 2 Heat Pipes 12mm 4 Pin PWM RGB for Intel.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$133.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5-2.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-sale">Sale</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Gaming</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Playstation 4 2TB Slim Gaming Console.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$142.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5-3.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-hot">Hot</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Backpacks</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Mini Portable Mobile Phone Powerbank for iphone.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$120.00</span>
                                             <span class="tp-product-price new-price">$97.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item p-relative transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-1.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-hot">Hot</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                   </svg>   
                                                      
                                                   <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Tablet</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Galaxy Tab S6 Lite 10.4-inch Android Tablet 128GB.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(7 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$320.00</span>
                                             <span class="tp-product-price new-price">$247.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-2.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-trending">Trending</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Smart Watch</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Tracker with IP67 Waterproof Pedometer Smart watch.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(6 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$72.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-3.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-offer">-25%</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Headphone</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Cancelling Headphones Wireless.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(5 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$1400.00</span>
                                             <span class="tp-product-price new-price">$120.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-4.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">HD Camera</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Professional Camera 4K Digital Video Camera.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(15 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$475.00</span>
                                             <span class="tp-product-price new-price">$340.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="topsell-tab-pane" role="tabpanel" aria-labelledby="topsell-tab" tabindex="0">
                              <div class="row">
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5-2.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-sale">Sale</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Gaming</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Playstation 4 2TB Slim Gaming Console.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$142.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5-3.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-hot">Hot</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Backpacks</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Mini Portable Mobile Phone Powerbank for iphone.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$120.00</span>
                                             <span class="tp-product-price new-price">$97.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item p-relative transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-1.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-hot">Hot</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                   </svg>   
                                                      
                                                   <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Tablet</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Galaxy Tab S6 Lite 10.4-inch Android Tablet 128GB.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(7 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$320.00</span>
                                             <span class="tp-product-price new-price">$247.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-2.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-trending">Trending</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Smart Watch</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Tracker with IP67 Waterproof Pedometer Smart watch.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(6 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$72.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-trending">Trending</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Powerbank</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Mini Portable PD 22.5W Fast Charging Powerbank.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(6 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$72.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-5-1.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Heat Pipes</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                CPU Cooler 2 Heat Pipes 12mm 4 Pin PWM RGB for Intel.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(4 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price">$133.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-3.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product badge -->
                                          <div class="tp-product-badge">
                                             <span class="product-offer">-25%</span>
                                          </div>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">Headphone</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Cancelling Headphones Wireless.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(5 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$1400.00</span>
                                             <span class="tp-product-price new-price">$120.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-sm-6">
                                    <div class="tp-product-item transition-3 mb-25">
                                       <div class="tp-product-thumb p-relative fix m-img">
                                          <a href="product-details.html">
                                             <img src="assets/img/product/product-4.jpg" alt="product-electronic">
                                          </a>
               
                                          <!-- product action -->
                                          <div class="tp-product-action">
                                             <div class="tp-product-action-item d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                      
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                      </svg>   
                                                      
                                                      <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                   <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                      <g mask="url(#mask0_1211_721)">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                      </g>
                                                   </svg>                                          
                                                      
                                                      <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                                   <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                                   </svg>                                                                                
                                                      
                                                   <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- product content -->
                                       <div class="tp-product-content">
                                          <div class="tp-product-category">
                                             <a href="shop.html">HD Camera</a>
                                          </div>
                                          <h3 class="tp-product-title">
                                             <a href="product-details.html">
                                                Professional Camera 4K Digital Video Camera.
                                             </a>
                                          </h3>
                                          <div class="tp-product-rating d-flex align-items-center">
                                             <div class="tp-product-rating-icon">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-rating-text">
                                                <span>(15 Review)</span>
                                             </div>
                                          </div>
                                          <div class="tp-product-price-wrapper">
                                             <span class="tp-product-price old-price">$475.00</span>
                                             <span class="tp-product-price new-price">$340.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                         </div>                         
                     </div>
                  </div>
               </div>
               
            </div>
         </section>
         <!-- product area end -->

         <!-- banner area start -->
         <section class="tp-banner-area pb-70">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-7">
                     <div class="tp-banner-item tp-banner-height p-relative mb-30 z-index-1 fix">
                        <div class="tp-banner-thumb include-bg transition-3" data-background="assets/img/product/banner/product-banner-1.jpg"></div>
                        <div class="tp-banner-content">
                           <span>Sale 20% off all store</span>
                           <h3 class="tp-banner-title">
                              <a href="product-details.html">Smartphone <br> BLU G91 Pro 2022</a>
                           </h3>
                           <div class="tp-banner-btn">
                              <a href="product-details.html" class="tp-link-btn">Shop Now 
                                 <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-5">
                     <div class="tp-banner-item tp-banner-item-sm tp-banner-height p-relative mb-30 z-index-1 fix">
                        <div class="tp-banner-thumb include-bg transition-3" data-background="assets/img/product/banner/product-banner-2.jpg"></div>
                        <div class="tp-banner-content">
                           <h3 class="tp-banner-title">
                              <a href="product-details.html">HyperX Cloud II <br> Wireless</a>
                           </h3>
                           <p>Sale 35% off</p>
                           <div class="tp-banner-btn">
                              <a href="product-details.html" class="tp-link-btn">Shop Now 
                                 <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- banner area end -->

         <!-- product offer area start -->
         <section class="tp-product-offer grey-bg-2 pt-70 pb-80">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xl-4 col-md-5 col-sm-6">
                     <div class="tp-section-title-wrapper mb-40">
                        <h3 class="tp-section-title">Deal of The Day

                           <svg width="114" height="35" viewBox="0 0 114 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053" stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                           </svg>
                        </h3>
                     </div>
                  </div>
                  <div class="col-xl-8 col-md-7 col-sm-6">
                     <div class="tp-product-offer-more-wrapper d-flex justify-content-sm-end p-relative z-index-1">
                        <div class="tp-product-offer-more mb-40 text-sm-end grey-bg-2">
                           <a href="shop.html" class="tp-btn tp-btn-2 tp-btn-blue">View All Deals 
                              <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </a>
                           <span class="tp-product-offer-more-border"></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-product-offer-slider fix">
                        <div class="tp-product-offer-slider-active swiper-container">
                           <div class="swiper-wrapper">
                              <div class="tp-product-offer-item tp-product-item transition-3 swiper-slide">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/offer/product-offer-1.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-compare-btn">
                                             <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6666 1L16 4.33333L12.6666 7.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             </svg>                                                  
                                                
                                                <span class="tp-product-tooltip">Compare</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
   
                                    <div class="tp-product-add-cart-btn-large-wrapper">
                                       <button type="button" class="tp-product-add-cart-btn-large">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                             
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                             
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                             </svg>  
                                             Add To Cart                                           
                                       </button>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">HD Camera</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Professional Camera 4K Digital Video Camera.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(15 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$475.00</span>
                                       <span class="tp-product-price new-price">$340.00</span>
                                    </div>
   
                                    <div class="tp-product-countdown" data-countdown data-date="Sep 30 2024 20:20:22">
                                       <div class="tp-product-countdown-inner">
                                          <ul>
                                             <li><span data-days>0</span> Days</li>
                                             <li><span data-hours>0</span> Hrs</li>
                                             <li><span data-minutes>0</span> Min</li>
                                             <li><span data-seconds>0</span> Sec</li>
                                          </ul>
                                       </div>
                                    </div>
   
                                 </div>
                              </div>
                              <div class="tp-product-offer-item tp-product-item transition-3 swiper-slide">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/offer/product-offer-2.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-compare-btn">
                                             <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6666 1L16 4.33333L12.6666 7.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             </svg>                                                  
                                                
                                                <span class="tp-product-tooltip">Compare</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
   
                                    <div class="tp-product-add-cart-btn-large-wrapper">
                                       <button type="button" class="tp-product-add-cart-btn-large">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                             
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                             
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                             </svg>  
                                             Add To Cart                                           
                                       </button>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">HD Camera</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Professional Camera 4K Digital Video Camera.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(15 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$475.00</span>
                                       <span class="tp-product-price new-price">$340.00</span>
                                    </div>
   
                                    <div class="tp-product-countdown" data-countdown data-date="Sep 30 2024 20:20:22">
                                       <div class="tp-product-countdown-inner">
                                          <ul>
                                             <li><span data-days>0</span> Days</li>
                                             <li><span data-hours>0</span> Hrs</li>
                                             <li><span data-minutes>0</span> Min</li>
                                             <li><span data-seconds>0</span> Sec</li>
                                          </ul>
                                       </div>
                                    </div>
   
                                 </div>
                              </div>
                              <div class="tp-product-offer-item tp-product-item transition-3 swiper-slide">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/offer/product-offer-3.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-compare-btn">
                                             <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6666 1L16 4.33333L12.6666 7.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             </svg>                                                  
                                                
                                                <span class="tp-product-tooltip">Compare</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
   
                                    <div class="tp-product-add-cart-btn-large-wrapper">
                                       <button type="button" class="tp-product-add-cart-btn-large">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                             
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                             
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                             </svg>  
                                             Add To Cart                                           
                                       </button>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">HD Camera</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Professional Camera 4K Digital Video Camera.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(15 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$475.00</span>
                                       <span class="tp-product-price new-price">$340.00</span>
                                    </div>
   
                                    <div class="tp-product-countdown" data-countdown data-date="Sep 30 2024 20:20:22">
                                       <div class="tp-product-countdown-inner">
                                          <ul>
                                             <li><span data-days>0</span> Days</li>
                                             <li><span data-hours>0</span> Hrs</li>
                                             <li><span data-minutes>0</span> Min</li>
                                             <li><span data-seconds>0</span> Sec</li>
                                          </ul>
                                       </div>
                                    </div>
   
                                 </div>
                              </div>
                              <div class="tp-product-offer-item tp-product-item transition-3 swiper-slide">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/offer/product-offer-2.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-compare-btn">
                                             <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6666 1L16 4.33333L12.6666 7.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M1 9.3335V7.66683C1 6.78277 1.35119 5.93493 1.97631 5.30981C2.60143 4.68469 3.44928 4.3335 4.33333 4.3335H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.33333 19.3332L1 15.9998L4.33333 12.6665" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16 11V12.6667C16 13.5507 15.6488 14.3986 15.0237 15.0237C14.3986 15.6488 13.5507 16 12.6667 16H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             </svg>                                                  
                                                
                                                <span class="tp-product-tooltip">Compare</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
   
                                    <div class="tp-product-add-cart-btn-large-wrapper">
                                       <button type="button" class="tp-product-add-cart-btn-large">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                             
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                             
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                             </svg>  
                                             Add To Cart                                           
                                       </button>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">HD Camera</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Professional Camera 4K Digital Video Camera.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(15 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$475.00</span>
                                       <span class="tp-product-price new-price">$340.00</span>
                                    </div>
   
                                    <div class="tp-product-countdown" data-countdown data-date="Sep 30 2024 20:20:22">
                                       <div class="tp-product-countdown-inner">
                                          <ul>
                                             <li><span data-days>0</span> Days</li>
                                             <li><span data-hours>0</span> Hrs</li>
                                             <li><span data-minutes>0</span> Min</li>
                                             <li><span data-seconds>0</span> Sec</li>
                                          </ul>
                                       </div>
                                    </div>
   
                                 </div>
                              </div>
                           </div>
                           <div class="tp-deals-slider-dot tp-swiper-dot text-center mt-40"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- product deal area end -->

         <section class="tp-product-gadget-area pt-80 pb-75">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-lg-5">
                     <div class="tp-product-gadget-sidebar mb-40">
                        <div class="tp-product-gadget-categories p-relative fix mb-10">
                           <div class="tp-product-gadget-thumb">
                              <img src="assets/img/product/gadget/gadget-girl.png" alt="">
                           </div>
                           <h3 class="tp-product-gadget-categories-title">Electronics <br> Gadgets</h3>

                           <div class="tp-product-gadget-categories-list">
                              <ul>
                                 <li><a href="shop-category.html">Micrscope</a></li>
                                 <li><a href="shop-category.html">Remote Control</a></li>
                                 <li><a href="shop-category.html">Monitor</a></li>
                                 <li><a href="shop-category.html">Thermometer</a></li>
                                 <li><a href="shop-category.html">Backpack</a></li>
                                 <li><a href="shop-category.html">Headphones</a></li>
                              </ul>
                           </div>

                           <div class="tp-product-gadget-btn">
                              <a href="shop-category.html" class="tp-link-btn">More Products 
                                 <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <div class="tp-product-gadget-banner">
                           <div class="tp-product-gadget-banner-slider-active swiper-container">
                              <div class="swiper-wrapper">
                                 <div class="tp-product-gadget-banner-item swiper-slide include-bg" data-background="assets/img/product/gadget/gadget-banner-1.jpg">
                                    <div class="tp-product-gadget-banner-content">
                                       <span class="tp-product-gadget-banner-price">Only $99.00</span>
                                       <h3 class="tp-product-gadget-banner-title">
                                          <a href="product-details.html">Selected novelty <br> Products</a>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="tp-product-gadget-banner-item swiper-slide include-bg" data-background="assets/img/product/gadget/gadget-banner-2.jpg">
                                    <div class="tp-product-gadget-banner-content">
                                       <span class="tp-product-gadget-banner-price">Only $55.00</span>
                                       <h3 class="tp-product-gadget-banner-title">
                                          <a href="product-details.html">Top Rated <br> Products</a>
                                       </h3>
                                    </div>
                                 </div>
                              </div>
                              <div class="tp-product-gadget-banner-slider-dot tp-swiper-dot"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-8 col-lg-7">
                     <div class="tp-product-gadget-wrapper">
                        <div class="row">
                           <div class="col-xl-4 col-sm-6">
                              <div class="tp-product-item p-relative transition-3 mb-25">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-12.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product badge -->
                                    <div class="tp-product-badge">
                                       <span class="product-offer">-25%</span>
                                    </div>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                             </svg>   
                                                
                                             <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Electric</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Yamaha Electric Violin-YEV104BL-Black String
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(6 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price">$72.00</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-sm-6">
                              <div class="tp-product-item p-relative transition-3 mb-25">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-13.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                             </svg>   
                                                
                                             <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Tablet Pro 8</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Microsoft Surface Pro 8-13" Touchscreen.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(5 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$475.00</span>
                                       <span class="tp-product-price new-price">$340.00</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-sm-6">
                              <div class="tp-product-item p-relative transition-3 mb-25">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-14.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product badge -->
                                    <div class="tp-product-badge">
                                       <span class="product-sale">Sale</span>
                                    </div>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                             </svg>   
                                                
                                             <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Headphone</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Playstation 4 2TB Slim Gaming Console.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(3 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price">$142.00</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-sm-6">
                              <div class="tp-product-item p-relative transition-3 mb-25">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-15.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product badge -->
                                    <div class="tp-product-badge">
                                       <span class="product-trending">Sale</span>
                                    </div>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                             </svg>   
                                                
                                             <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Pertronix</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Flame-Thrower VW Type 1 Engine Plug.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(6 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$135.00</span>
                                       <span class="tp-product-price new-price">$114.00</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-sm-6">
                              <div class="tp-product-item p-relative transition-3 mb-25">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-16.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product badge -->
                                    <div class="tp-product-badge">
                                       <span class="product-hot">Hot</span>
                                    </div>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                             </svg>   
                                                
                                             <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Amazon</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Echo Show 5 (2nd Gen) Adjustable Stand | Charcoal
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(6 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price">$40.00</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-sm-6">
                              <div class="tp-product-item p-relative transition-3 mb-25">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-17.jpg" alt="product-electronic">
                                    </a>
                  
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                             </svg>   
                                                
                                             <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Medical</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Smart Watch Heart Rate Blood Pressure.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(75 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price">$133.00</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!-- product banner area start -->
         <div class="tp-product-banner-area pb-90">
            <div class="container">
               <div class="tp-product-banner-slider fix">
                  <div class="tp-product-banner-slider-active swiper-container">
                     <div class="swiper-wrapper">
                        <div class="tp-product-banner-inner theme-bg p-relative z-index-1 fix swiper-slide">
                           <h4 class="tp-product-banner-bg-text">tablet</h4>
                           <div class="row align-items-center">
                              <div class="col-xl-6 col-lg-6">
                                 <div class="tp-product-banner-content p-relative z-index-1">
                                    <span class="tp-product-banner-subtitle">Tablet Collection 2023</span>
                                    <h3 class="tp-product-banner-title">Samsung Galaxy Tab S6, Wifi Tablet</h3>
                                    <div class="tp-product-banner-price mb-40">
                                       <span class="old-price">$1240.00</span>
                                       <p class="new-price">$975.00</p>
                                    </div>
                                    <div class="tp-product-banner-btn">
                                       <a href="shop.html" class="tp-btn tp-btn-2">Shop now</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6">
                                 <div class="tp-product-banner-thumb-wrapper p-relative">
                                    <div class="tp-product-banner-thumb-shape">
                                       <span class="tp-product-banner-thumb-gradient"></span>
                                       <img class="tp-offer-shape" src="assets/img/banner/banner-slider-offer.png" alt="">
                                    </div>
         
                                    <div class="tp-product-banner-thumb text-end p-relative z-index-1">
                                       <img src="assets/img/banner/banner-slider-1.png" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>  
                        <div class="tp-product-banner-inner theme-bg p-relative z-index-1 fix swiper-slide">
                           <h4 class="tp-product-banner-bg-text">tablet</h4>
                           <div class="row align-items-center">
                              <div class="col-xl-6 col-lg-6">
                                 <div class="tp-product-banner-content p-relative z-index-1">
                                    <span class="tp-product-banner-subtitle">Latest Technology Added</span>
                                    <h3 class="tp-product-banner-title">Apple iPad 10.2 9th Gen - 2021</h3>
                                    <div class="tp-product-banner-price mb-40">
                                       <span class="old-price">$1450.00</span>
                                       <p class="new-price">$1199.00</p>
                                    </div>
                                    <div class="tp-product-banner-btn">
                                       <a href="shop.html" class="tp-btn tp-btn-2">Shop now</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6">
                                 <div class="tp-product-banner-thumb-wrapper p-relative">
                                    <div class="tp-product-banner-thumb-shape">
                                       <span class="tp-product-banner-thumb-gradient"></span>
                                       <img class="tp-offer-shape" src="assets/img/banner/banner-slider-offer.png" alt="">
                                    </div>
                       
                                    <div class="tp-product-banner-thumb text-end p-relative z-index-1">
                                       <img src="assets/img/banner/banner-slider-2.png" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-product-banner-inner theme-bg p-relative z-index-1 fix swiper-slide">
                           <h4 class="tp-product-banner-bg-text">tablet</h4>
                           <div class="row align-items-center">
                              <div class="col-xl-6 col-lg-6">
                                 <div class="tp-product-banner-content p-relative z-index-1">
                                    <span class="tp-product-banner-subtitle">Tablet Collection 2023</span>
                                    <h3 class="tp-product-banner-title">Microsoft Surface Pro 8, Wifi Included</h3>
                                    <div class="tp-product-banner-price mb-40">
                                       <span class="old-price">$1249.00</span>
                                       <p class="new-price">$1300.00</p>
                                    </div>
                                    <div class="tp-product-banner-btn">
                                       <a href="shop.html" class="tp-btn tp-btn-2">Shop now</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6">
                                 <div class="tp-product-banner-thumb-wrapper p-relative">
                                    <div class="tp-product-banner-thumb-shape">
                                       <span class="tp-product-banner-thumb-gradient"></span>
                                       <img class="tp-offer-shape" src="assets/img/banner/banner-slider-offer.png" alt="">
                                    </div>
                       
                                    <div class="tp-product-banner-thumb text-end p-relative z-index-1">
                                       <img src="assets/img/banner/banner-slider-3.png" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>                      
                     </div>
                     <div class="tp-product-banner-slider-dot tp-swiper-dot"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- product banner area end -->

         <!-- product arrival area start -->
         <section class="tp-product-arrival-area pb-55">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xl-5 col-sm-6">
                     <div class="tp-section-title-wrapper mb-40">
                        <h3 class="tp-section-title">New Arrivals

                           <svg width="114" height="35" viewBox="0 0 114 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053" stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                           </svg>
                        </h3>
                     </div>
                  </div>
                  <div class="col-xl-7 col-sm-6">
                     <div class="tp-product-arrival-more-wrapper d-flex justify-content-end">
                        <div class="tp-product-arrival-arrow tp-swiper-arrow mb-40 text-end tp-product-arrival-border">      
                           <button type="button" class="tp-arrival-slider-button-prev">
                              <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                            
                           </button>             
                           <button type="button" class="tp-arrival-slider-button-next">
                              <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                       
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-product-arrival-slider fix">
                        <div class="tp-product-arrival-active swiper-container">
                           <div class="swiper-wrapper">
                              <div class="tp-product-item transition-3 mb-25 swiper-slide">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-6.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product badge -->
                                    <div class="tp-product-badge">
                                       <span class="product-trending">Trending</span>
                                    </div>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                </svg>   
                                                
                                                <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Fast Charger</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Fast Charger 6.5A Type-C Cable For OPPO Find X3 Pro
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(7 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$475.00</span>
                                       <span class="tp-product-price new-price">$7350.00</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tp-product-item transition-3 mb-25 swiper-slide ">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-7.jpg" alt="product-electronic">
                                    </a>
               
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                </svg>   
                                                
                                                <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Earbuds</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          True Wireless Noise Cancelling Earbuds with Apple.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(2 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$140.00</span>
                                       <span class="tp-product-price new-price">$120.00</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tp-product-item transition-3 mb-25 swiper-slide ">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-8.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product badge -->
                                    <div class="tp-product-badge">
                                       <span class="product-hot">Hot</span>
                                    </div>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                </svg>   
                                                
                                                <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Tablet</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Galaxy Tab S6 Lite 10.4-inch Android Tablet 128GB.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(7 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$320.00</span>
                                       <span class="tp-product-price new-price">$247.00</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tp-product-item transition-3 mb-25 swiper-slide ">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-9.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product badge -->
                                    <div class="tp-product-badge">
                                       <span class="product-hot">Hot</span>
                                    </div>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                </svg>   
                                                
                                                <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Tablet</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Galaxy Tab S6 Lite 10.4-inch Android Tablet 128GB.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(7 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$320.00</span>
                                       <span class="tp-product-price new-price">$247.00</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="tp-product-item transition-3 mb-25 swiper-slide ">
                                 <div class="tp-product-thumb p-relative fix m-img">
                                    <a href="product-details.html">
                                       <img src="assets/img/product/product-10.jpg" alt="product-electronic">
                                    </a>
         
                                    <!-- product badge -->
                                    <div class="tp-product-badge">
                                       <span class="product-hot">Hot</span>
                                    </div>
         
                                    <!-- product action -->
                                    <div class="tp-product-action">
                                       <div class="tp-product-action-item d-flex flex-column">
                                          <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                             <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.93795 5.34749L4.54095 12.5195C4.58495 13.0715 5.03594 13.4855 5.58695 13.4855H5.59095H16.5019H16.5039C17.0249 13.4855 17.4699 13.0975 17.5439 12.5825L18.4939 6.02349C18.5159 5.86749 18.4769 5.71149 18.3819 5.58549C18.2879 5.45849 18.1499 5.37649 17.9939 5.35449C17.7849 5.36249 9.11195 5.35049 3.93795 5.34749ZM5.58495 14.9855C4.26795 14.9855 3.15295 13.9575 3.04595 12.6425L2.12995 1.74849L0.622945 1.48849C0.213945 1.41649 -0.0590549 1.02949 0.0109451 0.620487C0.082945 0.211487 0.477945 -0.054513 0.877945 0.00948704L2.95795 0.369487C3.29295 0.428487 3.54795 0.706487 3.57695 1.04649L3.81194 3.84749C18.0879 3.85349 18.1339 3.86049 18.2029 3.86849C18.7599 3.94949 19.2499 4.24049 19.5839 4.68849C19.9179 5.13549 20.0579 5.68649 19.9779 6.23849L19.0289 12.7965C18.8499 14.0445 17.7659 14.9855 16.5059 14.9855H16.5009H5.59295H5.58495Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8979 9.04382H12.1259C11.7109 9.04382 11.3759 8.70782 11.3759 8.29382C11.3759 7.87982 11.7109 7.54382 12.1259 7.54382H14.8979C15.3119 7.54382 15.6479 7.87982 15.6479 8.29382C15.6479 8.70782 15.3119 9.04382 14.8979 9.04382Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15474 17.702C5.45574 17.702 5.69874 17.945 5.69874 18.246C5.69874 18.547 5.45574 18.791 5.15474 18.791C4.85274 18.791 4.60974 18.547 4.60974 18.246C4.60974 17.945 4.85274 17.702 5.15474 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15374 18.0409C5.04074 18.0409 4.94874 18.1329 4.94874 18.2459C4.94874 18.4729 5.35974 18.4729 5.35974 18.2459C5.35974 18.1329 5.26674 18.0409 5.15374 18.0409ZM5.15374 19.5409C4.43974 19.5409 3.85974 18.9599 3.85974 18.2459C3.85974 17.5319 4.43974 16.9519 5.15374 16.9519C5.86774 16.9519 6.44874 17.5319 6.44874 18.2459C6.44874 18.9599 5.86774 19.5409 5.15374 19.5409Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.435 17.702C16.736 17.702 16.98 17.945 16.98 18.246C16.98 18.547 16.736 18.791 16.435 18.791C16.133 18.791 15.89 18.547 15.89 18.246C15.89 17.945 16.133 17.702 16.435 17.702Z" fill="currentColor"/>
                                                
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.434 18.0409C16.322 18.0409 16.23 18.1329 16.23 18.2459C16.231 18.4749 16.641 18.4729 16.64 18.2459C16.64 18.1329 16.547 18.0409 16.434 18.0409ZM16.434 19.5409C15.72 19.5409 15.14 18.9599 15.14 18.2459C15.14 17.5319 15.72 16.9519 16.434 16.9519C17.149 16.9519 17.73 17.5319 17.73 18.2459C17.73 18.9599 17.149 19.5409 16.434 19.5409Z" fill="currentColor"/>
                                                </svg>   
                                                
                                                <span class="tp-product-tooltip">Add to Cart</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                             <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99938 5.64111C8.66938 5.64111 7.58838 6.72311 7.58838 8.05311C7.58838 9.38211 8.66938 10.4631 9.99938 10.4631C11.3294 10.4631 12.4114 9.38211 12.4114 8.05311C12.4114 6.72311 11.3294 5.64111 9.99938 5.64111ZM9.99938 11.9631C7.84238 11.9631 6.08838 10.2091 6.08838 8.05311C6.08838 5.89611 7.84238 4.14111 9.99938 4.14111C12.1564 4.14111 13.9114 5.89611 13.9114 8.05311C13.9114 10.2091 12.1564 11.9631 9.99938 11.9631Z" fill="currentColor"/>
                                                <g mask="url(#mask0_1211_721)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.56975 8.05226C3.42975 12.1613 6.56275 14.6043 9.99975 14.6053C13.4368 14.6043 16.5697 12.1613 18.4298 8.05226C16.5697 3.94426 13.4368 1.50126 9.99975 1.50026C6.56375 1.50126 3.42975 3.94426 1.56975 8.05226ZM10.0017 16.1053H9.99775H9.99675C5.86075 16.1023 2.14675 13.2033 0.06075 8.34826C-0.02025 8.15926 -0.02025 7.94526 0.06075 7.75626C2.14675 2.90226 5.86175 0.00326172 9.99675 0.000261719C9.99875 -0.000738281 9.99875 -0.000738281 9.99975 0.000261719C10.0017 -0.000738281 10.0017 -0.000738281 10.0028 0.000261719C14.1388 0.00326172 17.8527 2.90226 19.9387 7.75626C20.0208 7.94526 20.0208 8.15926 19.9387 8.34826C17.8537 13.2033 14.1388 16.1023 10.0028 16.1053H10.0017Z" fill="currentColor"/>
                                                </g>
                                             </svg>                                          
                                                
                                                <span class="tp-product-tooltip">Quick View</span>
                                          </button>
                                          <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                             <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.78158 8.88867C3.15121 13.1386 8.5623 16.5749 10.0003 17.4255C11.4432 16.5662 16.8934 13.0918 18.219 8.89257C19.0894 6.17816 18.2815 2.73984 15.0714 1.70806C13.5162 1.21019 11.7021 1.5132 10.4497 2.4797C10.1879 2.68041 9.82446 2.68431 9.56069 2.48555C8.23405 1.49079 6.50102 1.19947 4.92136 1.70806C1.71613 2.73887 0.911158 6.17718 1.78158 8.88867ZM10.0013 19C9.88015 19 9.75999 18.9708 9.65058 18.9113C9.34481 18.7447 2.14207 14.7852 0.386569 9.33491C0.385592 9.33491 0.385592 9.33394 0.385592 9.33394C-0.71636 5.90244 0.510636 1.59018 4.47199 0.316764C6.33203 -0.283407 8.35911 -0.019371 9.99836 1.01242C11.5868 0.0108324 13.6969 -0.26587 15.5198 0.316764C19.4851 1.59213 20.716 5.90342 19.615 9.33394C17.9162 14.7218 10.6607 18.7408 10.353 18.9094C10.2436 18.9698 10.1224 19 10.0013 19Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7806 7.42904C15.4025 7.42904 15.0821 7.13968 15.0508 6.75775C14.9864 5.95687 14.4491 5.2807 13.6841 5.03421C13.2983 4.9095 13.0873 4.49737 13.2113 4.11446C13.3373 3.73059 13.7467 3.52209 14.1335 3.6429C15.4651 4.07257 16.398 5.24855 16.5123 6.63888C16.5445 7.04127 16.2446 7.39397 15.8412 7.42612C15.8206 7.42807 15.8011 7.42904 15.7806 7.42904Z" fill="currentColor"/>
                                             </svg>                                                                                
                                                
                                             <span class="tp-product-tooltip">Add To Wishlist</span>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- product content -->
                                 <div class="tp-product-content">
                                    <div class="tp-product-category">
                                       <a href="shop.html">Tablet</a>
                                    </div>
                                    <h3 class="tp-product-title">
                                       <a href="product-details.html">
                                          Galaxy Tab S6 Lite 10.4-inch Android Tablet 128GB.
                                       </a>
                                    </h3>
                                    <div class="tp-product-rating d-flex align-items-center">
                                       <div class="tp-product-rating-icon">
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star"></i></span>
                                          <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                       </div>
                                       <div class="tp-product-rating-text">
                                          <span>(7 Review)</span>
                                       </div>
                                    </div>
                                    <div class="tp-product-price-wrapper">
                                       <span class="tp-product-price old-price">$320.00</span>
                                       <span class="tp-product-price new-price">$247.00</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                      </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- product arrival area end -->

         <!-- product sm area start -->
         <section class="tp-product-sm-area">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-md-6">
                     <div class="tp-product-sm-list mb-50">
                        <div class="tp-section-title-wrapper mb-40">
                           <h3 class="tp-section-title tp-section-title-sm">Discount Products
                              <svg width="64" height="20" viewBox="0 0 64 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M62 13.1107C1.91792 -5.41202 -3.10865 1.22305 5.00242 18.3636" stroke="currentColor" stroke-width="3" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                              </svg>                                 
                           </h3>
                        </div>

                        <div class="tp-product-sm-wrapper mr-20">
                           <div class="tp-product-sm-item d-flex align-items-center">
                              <div class="tp-product-thumb mr-25 fix">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-1.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-product-sm-content">
                                 <div class="tp-product-category">
                                    <a href="shop.html">HD Camera</a>
                                 </div>
                                 <h3 class="tp-product-title">
                                    <a href="product-details.html">
                                       Oppo A96 5G Mobile Phone
                                    </a>
                                 </h3>
                                 <div class="tp-product-rating d-sm-flex align-items-center">
                                    <div class="tp-product-rating-icon">
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-rating-text">
                                       <span>(4 Review)</span>
                                    </div>
                                 </div>
                                 <div class="tp-product-price-wrapper">
                                    <span class="tp-product-price">$97.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-product-sm-item d-flex align-items-center">
                              <div class="tp-product-thumb mr-25 fix">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-2.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-product-sm-content">
                                 <div class="tp-product-category">
                                    <a href="shop.html">Iron Man</a>
                                 </div>
                                 <h3 class="tp-product-title">
                                    <a href="product-details.html">Single Stem Vase</a>
                                 </h3>
                                 <div class="tp-product-rating d-sm-flex align-items-center">
                                    <div class="tp-product-rating-icon">
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-rating-text">
                                       <span>(5 Review)</span>
                                    </div>
                                 </div>
                                 <div class="tp-product-price-wrapper">
                                    <span class="tp-product-price">$97.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-product-sm-item d-flex align-items-center">
                              <div class="tp-product-thumb mr-25 fix">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-3.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-product-sm-content">
                                 <div class="tp-product-category">
                                    <a href="shop.html">Speaker</a>
                                 </div>
                                 <h3 class="tp-product-title">
                                    <a href="product-details.html">Echo Dot smart speaker</a>
                                 </h3>
                                 <div class="tp-product-rating d-sm-flex align-items-center">
                                    <div class="tp-product-rating-icon">
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-rating-text">
                                       <span>(10 Review)</span>
                                    </div>
                                 </div>
                                 <div class="tp-product-price-wrapper">
                                    <span class="tp-product-price">$142.00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="tp-product-sm-list mb-50">
                        <div class="tp-section-title-wrapper mb-40">
                           <h3 class="tp-section-title tp-section-title-sm">Featured Products
                              <svg width="64" height="20" viewBox="0 0 64 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M62 13.1107C1.91792 -5.41202 -3.10865 1.22305 5.00242 18.3636" stroke="currentColor" stroke-width="3" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                              </svg>                                 
                           </h3>
                        </div>

                        <div class="tp-product-sm-wrapper mr-20">
                           <div class="tp-product-sm-item d-flex align-items-center">
                              <div class="tp-product-thumb mr-25 fix">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-4.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-product-sm-content">
                                 <div class="tp-product-category">
                                    <a href="shop.html">Motherboard</a>
                                 </div>
                                 <h3 class="tp-product-title">
                                    <a href="product-details.html">CPU Cooler 6 Heat Pipes</a>
                                 </h3>
                                 <div class="tp-product-rating d-sm-flex align-items-center">
                                    <div class="tp-product-rating-icon">
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-rating-text">
                                       <span>(4 Review)</span>
                                    </div>
                                 </div>
                                 <div class="tp-product-price-wrapper">
                                    <span class="tp-product-price">$12.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-product-sm-item d-flex align-items-center">
                              <div class="tp-product-thumb mr-25 fix">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-5.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-product-sm-content">
                                 <div class="tp-product-category">
                                    <a href="shop.html">Digital Camera</a>
                                 </div>
                                 <h3 class="tp-product-title">
                                    <a href="product-details.html">Photography Camera</a>
                                 </h3>
                                 <div class="tp-product-rating d-sm-flex align-items-center">
                                    <div class="tp-product-rating-icon">
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-rating-text">
                                       <span>(9 Review)</span>
                                    </div>
                                 </div>
                                 <div class="tp-product-price-wrapper">
                                    <span class="tp-product-price">$84.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-product-sm-item d-flex align-items-center">
                              <div class="tp-product-thumb mr-25 fix">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-6.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-product-sm-content">
                                 <div class="tp-product-category">
                                    <a href="shop.html">Smart Watches</a>
                                 </div>
                                 <h3 class="tp-product-title">
                                    <a href="product-details.html">Real-Time Weather.</a>
                                 </h3>
                                 <div class="tp-product-rating d-sm-flex align-items-center">
                                    <div class="tp-product-rating-icon">
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-rating-text">
                                       <span>(6 Review)</span>
                                    </div>
                                 </div>
                                 <div class="tp-product-price-wrapper">
                                    <span class="tp-product-price">$120.00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="tp-product-sm-list mb-50">
                        <div class="tp-section-title-wrapper mb-40">
                           <h3 class="tp-section-title tp-section-title-sm">Selling Products
                              <svg width="64" height="20" viewBox="0 0 64 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M62 13.1107C1.91792 -5.41202 -3.10865 1.22305 5.00242 18.3636" stroke="currentColor" stroke-width="3" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                              </svg>                                 
                           </h3>
                        </div>

                        <div class="tp-product-sm-wrapper mr-20">
                           <div class="tp-product-sm-item d-flex align-items-center">
                              <div class="tp-product-thumb mr-25 fix">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-7.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-product-sm-content">
                                 <div class="tp-product-category">
                                    <a href="shop.html">Usb Flash Disk</a>
                                 </div>
                                 <h3 class="tp-product-title">
                                    <a href="product-details.html">Metal Usb 3.0 Pen Drive 2TB</a>
                                 </h3>
                                 <div class="tp-product-rating d-sm-flex align-items-center">
                                    <div class="tp-product-rating-icon">
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-rating-text">
                                       <span>(4 Review)</span>
                                    </div>
                                 </div>
                                 <div class="tp-product-price-wrapper">
                                    <span class="tp-product-price">$102.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-product-sm-item d-flex align-items-center">
                              <div class="tp-product-thumb mr-25 fix">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-8.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-product-sm-content">
                                 <div class="tp-product-category">
                                    <a href="shop.html">HawkEye</a>
                                 </div>
                                 <h3 class="tp-product-title">
                                    <a href="product-details.html">HawkEye Fishtrax</a>
                                 </h3>
                                 <div class="tp-product-rating d-sm-flex align-items-center">
                                    <div class="tp-product-rating-icon">
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-rating-text">
                                       <span>(2 Review)</span>
                                    </div>
                                 </div>
                                 <div class="tp-product-price-wrapper">
                                    <span class="tp-product-price">$59.00</span>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-product-sm-item d-flex align-items-center">
                              <div class="tp-product-thumb mr-25 fix">
                                 <a href="product-details.html">
                                    <img src="assets/img/product/sm/product-sm-9.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-product-sm-content">
                                 <div class="tp-product-category">
                                    <a href="shop.html">Tablet</a>
                                 </div>
                                 <h3 class="tp-product-title">
                                    <a href="product-details.html">Galaxy Tab S6 Android</a>
                                 </h3>
                                 <div class="tp-product-rating d-sm-flex align-items-center">
                                    <div class="tp-product-rating-icon">
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                       <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-rating-text">
                                       <span>(12 Review)</span>
                                    </div>
                                 </div>
                                 <div class="tp-product-price-wrapper">
                                    <span class="tp-product-price">$356.00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- product sm area end -->

         <!-- blog area start -->
         <section class="tp-blog-area pt-50 pb-75">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xl-4 col-md-6">
                     <div class="tp-section-title-wrapper mb-50">
                        <h3 class="tp-section-title">Latest news & articles

                           <svg width="114" height="35" viewBox="0 0 114 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053" stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                           </svg>
                        </h3>
                     </div>
                  </div>
                  <div class="col-xl-8 col-md-6">
                     <div class="tp-blog-more-wrapper d-flex justify-content-md-end">
                        <div class="tp-blog-more mb-50 text-md-end">
                           <a href="blog-grid.html" class="tp-btn tp-btn-2 tp-btn-blue">View All Blog 
                              <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </a>
                           <span class="tp-blog-more-border"></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-blog-main-slider">
                        <div class="tp-blog-main-slider-active swiper-container">
                           <div class="swiper-wrapper">
                              <div class="tp-blog-item mb-30 swiper-slide">
                                 <div class="tp-blog-thumb p-relative fix">
                                    <a href="blog-details.html">
                                       <img src="assets/img/blog/blog-1.jpg" alt="">
                                    </a>
                                    <div class="tp-blog-meta tp-blog-meta-date">
                                       <span>14 July, 2022</span>
                                    </div>
                                 </div>
                                 <div class="tp-blog-content">
                                    <h3 class="tp-blog-title">
                                       <a href="blog-details.html">The Modern Art Clay Ceramics.</a>
                                    </h3>
            
                                    <div class="tp-blog-tag">
                                       <span><i class="fa-light fa-tag"></i></span>
                                       <a href="#">Tablet,</a>
                                       <a href="#">News</a>
                                    </div>
            
                                    <p>The world is an amazing place providing an incredible assortment of interesting locations across.</p>
            
                                    <div class="tp-blog-btn">
                                       <a href="blog-details.html" class="tp-btn-2 tp-btn-border-2">
                                          Read More 
                                          <span>
                                             <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             </svg>                                       
                                          </span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="tp-blog-item mb-30 swiper-slide">
                                 <div class="tp-blog-thumb p-relative fix">
                                    <a href="blog-details.html">
                                       <img src="assets/img/blog/blog-2.jpg" alt="">
                                    </a>
                                    <div class="tp-blog-meta tp-blog-meta-date">
                                       <span>10 Nov, 2022</span>
                                    </div>
                                 </div>
                                 <div class="tp-blog-content">
                                    <h3 class="tp-blog-title">
                                       <a href="blog-details.html">How clothes are linked to climate</a>
                                    </h3>
         
                                    <div class="tp-blog-tag">
                                       <span><i class="fa-light fa-tag"></i></span>
                                       <a href="#">Monitor,</a>
                                       <a href="#">Technology</a>
                                    </div>
         
                                    <p>The world is an amazing place providing an incredible assortment of interesting locations across.</p>
         
                                    <div class="tp-blog-btn">
                                       <a href="blog-details.html" class="tp-btn-2 tp-btn-border-2">
                                          Read More 
                                          <span>
                                             <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             </svg>                                       
                                          </span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="tp-blog-item mb-30 swiper-slide">
                                 <div class="tp-blog-thumb p-relative fix">
                                    <a href="blog-details.html">
                                       <img src="assets/img/blog/blog-3.jpg" alt="">
                                    </a>
                                    <div class="tp-blog-meta tp-blog-meta-date">
                                       <span>20 June, 2023</span>
                                    </div>
                                 </div>
                                 <div class="tp-blog-content">
                                    <h3 class="tp-blog-title">
                                       <a href="blog-details.html">The Sound Of Fashion: Malcolm</a>
                                    </h3>
         
                                    <div class="tp-blog-tag">
                                       <span><i class="fa-light fa-tag"></i></span>
                                       <a href="#">Microphone,</a>
                                       <a href="#">Computer</a>
                                    </div>
         
                                    <p>The world is an amazing place providing an incredible assortment of interesting locations across.</p>
         
                                    <div class="tp-blog-btn">
                                       <a href="blog-details.html" class="tp-btn-2 tp-btn-border-2">
                                          Read More 
                                          <span>
                                             <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             </svg>                                       
                                          </span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- blog area end -->

         <!-- instagram area start -->
         <div class="tp-instagram-area pb-70">
            <div class="container">
               <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
                  <div class="col">
                     <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                        <img src="assets/img/instagram/instagram-1.jpg" alt="">
                        <div class="tp-instagram-icon">
                           <a href="assets/img/instagram/instagram-1.jpg" class="popup-image"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                        <img src="assets/img/instagram/instagram-2.jpg" alt="">
                        <div class="tp-instagram-icon">
                           <a href="assets/img/instagram/instagram-2.jpg" class="popup-image"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                        <img src="assets/img/instagram/instagram-3.jpg" alt="">
                        <div class="tp-instagram-icon">
                           <a href="assets/img/instagram/instagram-3.jpg" class="popup-image"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                        <img src="assets/img/instagram/instagram-4.jpg" alt="">
                        <div class="tp-instagram-icon">
                           <a href="assets/img/instagram/instagram-4.jpg" class="popup-image"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="tp-instagram-item p-relative z-index-1 fix mb-30 w-img">
                        <img src="assets/img/instagram/instagram-5.jpg" alt="">
                        <div class="tp-instagram-icon">
                           <a href="assets/img/instagram/instagram-5.jpg" class="popup-image"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- instagram area end -->

         <!-- subscribe area start -->
         <section class="tp-subscribe-area pt-70 pb-65 theme-bg p-relative z-index-1">
            <div class="tp-subscribe-shape">
               <img class="tp-subscribe-shape-1" src="assets/img/subscribe/subscribe-shape-1.png" alt="">
               <img class="tp-subscribe-shape-2" src="assets/img/subscribe/subscribe-shape-2.png" alt="">
               <img class="tp-subscribe-shape-3" src="assets/img/subscribe/subscribe-shape-3.png" alt="">
               <img class="tp-subscribe-shape-4" src="assets/img/subscribe/subscribe-shape-4.png" alt="">
               <!-- plane shape -->
               <div class="tp-subscribe-plane">
                  <img class="tp-subscribe-plane-shape" src="assets/img/subscribe/plane.png" alt="">
                  <svg width="399" height="110" class="d-none d-sm-block" viewBox="0 0 399 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M0.499634 1.00049C8.5 20.0005 54.2733 13.6435 60.5 40.0005C65.6128 61.6426 26.4546 130.331 15 90.0005C-9 5.5 176.5 127.5 218.5 106.5C301.051 65.2247 202 -57.9188 344.5 40.0003C364 53.3997 384 22 399 22" stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"/>
                  </svg>
                  <svg class="d-sm-none" width="193" height="110" viewBox="0 0 193 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M1 1C4.85463 20.0046 26.9085 13.6461 29.9086 40.0095C32.372 61.6569 13.5053 130.362 7.98637 90.0217C-3.57698 5.50061 85.7981 127.53 106.034 106.525C145.807 65.2398 98.0842 -57.9337 166.742 40.0093C176.137 53.412 185.773 22.0046 193 22.0046" stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"/>
                  </svg>
               </div>
            </div>
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-7 col-lg-7">
                     <div class="tp-subscribe-content">
                        <span>Sale 20% off all store</span>
                        <h3 class="tp-subscribe-title">Subscribe our Newsletter</h3>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5">
                     <div class="tp-subscribe-form">
                        <form action="#">
                           <div class="tp-subscribe-input">
                              <input type="email" placeholder="Enter Your Email">
                              <button type="submit">Subscribe</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- subscribe area end -->   
         
         <div class="modal fade tp-product-modal" id="producQuickViewModal" tabindex="-1" aria-labelledby="producQuickViewModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                  <div class="tp-product-modal-content d-lg-flex align-items-start">
                     <button type="button" class="tp-product-modal-close-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal"><i class="fa-regular fa-xmark"></i></button>
                     <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex">
                        <nav>
                           <div class="nav nav-tabs flex-sm-column " id="productDetailsNavThumb" role="tablist">
                              <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                 <img src="assets/img/product/details/nav/product-details-nav-1.jpg" alt="">
                              </button>
                              <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                                 <img src="assets/img/product/details/nav/product-details-nav-2.jpg" alt="">
                              </button>
                              <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                                 <img src="assets/img/product/details/nav/product-details-nav-3.jpg" alt="">
                              </button>
                              <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                 <img src="assets/img/product/details/nav/product-details-nav-4.jpg" alt="">
                              </button>
                           </div>
                        </nav>
                        <div class="tab-content m-img" id="productDetailsNavContent">
                           <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="assets/img/product/details/main/product-details-main-1.jpg" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="assets/img/product/details/main/product-details-main-2.jpg" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="assets/img/product/details/main/product-details-main-3.jpg" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                              <div class="tp-product-details-nav-main-thumb">
                                 <img src="assets/img/product/details/main/product-details-main-4.jpg" alt="">
                              </div>
                           </div>
                         </div>
                     </div>
                     <div class="tp-product-details-wrapper">
                        <div class="tp-product-details-category">
                           <span>Computers & Tablets</span>
                        </div>
                        <h3 class="tp-product-details-title">Samsung galaxy A8 tablet</h3>
   
                        <!-- inventory details -->
                        <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                           <div class="tp-product-details-stock mb-10">
                              <span>In Stock</span>
                           </div>
                           <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                              <div class="tp-product-details-rating">
                                 <span><i class="fa-solid fa-star"></i></span>
                                 <span><i class="fa-solid fa-star"></i></span>
                                 <span><i class="fa-solid fa-star"></i></span>
                                 <span><i class="fa-solid fa-star"></i></span>
                                 <span><i class="fa-solid fa-star"></i></span>
                              </div>
                              <div class="tp-product-details-reviews">
                                 <span>(36 Reviews)</span>
                              </div>
                           </div>
                        </div>
                        <p>A Screen Everyone Will Love: Whether your family is streaming or video chatting with friends tablet A8... <span>See more</span></p>
   
                        <!-- price -->
                        <div class="tp-product-details-price-wrapper mb-20">
                           <span class="tp-product-details-price old-price">$320.00</span>
                           <span class="tp-product-details-price new-price">$236.00</span>
                        </div>
   
                        <!-- variations -->
                        <div class="tp-product-details-variation">
                           <!-- single item -->
                           <div class="tp-product-details-variation-item">
                              <h4 class="tp-product-details-variation-title">Color :</h4>
                              <div class="tp-product-details-variation-list">
                                 <button type="button" class="color tp-color-variation-btn" >
                                    <span data-bg-color="#F8B655"></span>
                                    <span class="tp-color-variation-tootltip">Yellow</span>
                                 </button>
                                 <button type="button" class="color tp-color-variation-btn active" >
                                    <span data-bg-color="#CBCBCB"></span>
                                    <span class="tp-color-variation-tootltip">Gray</span>
                                 </button>
                                 <button type="button" class="color tp-color-variation-btn" >
                                    <span data-bg-color="#494E52"></span>
                                    <span class="tp-color-variation-tootltip">Black</span>
                                 </button>
                                 <button type="button" class="color tp-color-variation-btn" >
                                    <span data-bg-color="#B4505A"></span>
                                    <span class="tp-color-variation-tootltip">Brown</span>
                                 </button>
                              </div>
                           </div>
                        </div>
   
                        <!-- actions -->
                        <div class="tp-product-details-action-wrapper">
                           <h3 class="tp-product-details-action-title">Quantity</h3>
                           <div class="tp-product-details-action-item-wrapper d-sm-flex align-items-center">
                              <div class="tp-product-details-quantity">
                                 <div class="tp-product-quantity mb-15 mr-15">
                                    <span class="tp-cart-minus">
                                       <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                                            
                                    </span>
                                    <input class="tp-cart-input" type="text" value="1"/>
                                    <span class="tp-cart-plus">
                                       <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span>
                                 </div>
                              </div>
                              <div class="tp-product-details-add-to-cart mb-15 w-100">
                                 <button class="tp-product-details-add-to-cart-btn w-100">Add To Cart</button>
                              </div>
                           </div>
                           <button class="tp-product-details-buy-now-btn w-100">Buy Now</button>
                        </div>
                        <div class="tp-product-details-action-sm">
                           <button type="button" class="tp-product-details-action-sm-btn">
                              <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1 3.16431H10.8622C12.0451 3.16431 12.9999 4.08839 12.9999 5.23315V7.52268" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M3.25177 0.985168L1 3.16433L3.25177 5.34354" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M12.9999 12.5983H3.13775C1.95486 12.5983 1 11.6742 1 10.5295V8.23993" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M10.748 14.7774L12.9998 12.5983L10.748 10.4191" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              Compare
                           </button>
                           <button type="button" class="tp-product-details-action-sm-btn">
                              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M2.33541 7.54172C3.36263 10.6766 7.42094 13.2113 8.49945 13.8387C9.58162 13.2048 13.6692 10.6421 14.6635 7.5446C15.3163 5.54239 14.7104 3.00621 12.3028 2.24514C11.1364 1.8779 9.77578 2.1014 8.83648 2.81432C8.64012 2.96237 8.36757 2.96524 8.16974 2.81863C7.17476 2.08487 5.87499 1.86999 4.69024 2.24514C2.28632 3.00549 1.68259 5.54167 2.33541 7.54172ZM8.50115 15C8.4103 15 8.32018 14.9784 8.23812 14.9346C8.00879 14.8117 2.60674 11.891 1.29011 7.87081C1.28938 7.87081 1.28938 7.8701 1.28938 7.8701C0.462913 5.33895 1.38316 2.15812 4.35418 1.21882C5.7492 0.776121 7.26952 0.97088 8.49895 1.73195C9.69029 0.993159 11.2729 0.789057 12.6401 1.21882C15.614 2.15956 16.5372 5.33966 15.7115 7.8701C14.4373 11.8443 8.99571 14.8088 8.76492 14.9332C8.68286 14.9777 8.592 15 8.50115 15Z" fill="currentColor"/>
                                 <path d="M8.49945 13.8387L8.42402 13.9683L8.49971 14.0124L8.57526 13.9681L8.49945 13.8387ZM14.6635 7.5446L14.5209 7.4981L14.5207 7.49875L14.6635 7.5446ZM12.3028 2.24514L12.348 2.10211L12.3478 2.10206L12.3028 2.24514ZM8.83648 2.81432L8.92678 2.93409L8.92717 2.9338L8.83648 2.81432ZM8.16974 2.81863L8.25906 2.69812L8.25877 2.69791L8.16974 2.81863ZM4.69024 2.24514L4.73548 2.38815L4.73552 2.38814L4.69024 2.24514ZM8.23812 14.9346L8.16727 15.0668L8.16744 15.0669L8.23812 14.9346ZM1.29011 7.87081L1.43266 7.82413L1.39882 7.72081H1.29011V7.87081ZM1.28938 7.8701L1.43938 7.87009L1.43938 7.84623L1.43197 7.82354L1.28938 7.8701ZM4.35418 1.21882L4.3994 1.36184L4.39955 1.36179L4.35418 1.21882ZM8.49895 1.73195L8.42 1.85949L8.49902 1.90841L8.57801 1.85943L8.49895 1.73195ZM12.6401 1.21882L12.6853 1.0758L12.685 1.07572L12.6401 1.21882ZM15.7115 7.8701L15.5689 7.82356L15.5686 7.8243L15.7115 7.8701ZM8.76492 14.9332L8.69378 14.8011L8.69334 14.8013L8.76492 14.9332ZM2.19287 7.58843C2.71935 9.19514 4.01596 10.6345 5.30013 11.744C6.58766 12.8564 7.88057 13.6522 8.42402 13.9683L8.57487 13.709C8.03982 13.3978 6.76432 12.6125 5.49626 11.517C4.22484 10.4185 2.97868 9.02313 2.47795 7.49501L2.19287 7.58843ZM8.57526 13.9681C9.12037 13.6488 10.4214 12.8444 11.7125 11.729C12.9999 10.6167 14.2963 9.17932 14.8063 7.59044L14.5207 7.49875C14.0364 9.00733 12.7919 10.4 11.5164 11.502C10.2446 12.6008 8.9607 13.3947 8.42364 13.7093L8.57526 13.9681ZM14.8061 7.59109C15.1419 6.5613 15.1554 5.39131 14.7711 4.37633C14.3853 3.35729 13.5989 2.49754 12.348 2.10211L12.2576 2.38816C13.4143 2.75381 14.1347 3.54267 14.4905 4.48255C14.8479 5.42648 14.8379 6.52568 14.5209 7.4981L14.8061 7.59109ZM12.3478 2.10206C11.137 1.72085 9.72549 1.95125 8.7458 2.69484L8.92717 2.9338C9.82606 2.25155 11.1357 2.03494 12.2577 2.38821L12.3478 2.10206ZM8.74618 2.69455C8.60221 2.8031 8.40275 2.80462 8.25906 2.69812L8.08043 2.93915C8.33238 3.12587 8.67804 3.12163 8.92678 2.93409L8.74618 2.69455ZM8.25877 2.69791C7.225 1.93554 5.87527 1.71256 4.64496 2.10213L4.73552 2.38814C5.87471 2.02742 7.12452 2.2342 8.08071 2.93936L8.25877 2.69791ZM4.64501 2.10212C3.39586 2.49722 2.61099 3.35688 2.22622 4.37554C1.84299 5.39014 1.85704 6.55957 2.19281 7.58826L2.478 7.49518C2.16095 6.52382 2.15046 5.42513 2.50687 4.48154C2.86175 3.542 3.58071 2.7534 4.73548 2.38815L4.64501 2.10212ZM8.50115 14.85C8.43415 14.85 8.36841 14.8341 8.3088 14.8023L8.16744 15.0669C8.27195 15.1227 8.38645 15.15 8.50115 15.15V14.85ZM8.30897 14.8024C8.19831 14.7431 6.7996 13.9873 5.26616 12.7476C3.72872 11.5046 2.07716 9.79208 1.43266 7.82413L1.14756 7.9175C1.81968 9.96978 3.52747 11.7277 5.07755 12.9809C6.63162 14.2373 8.0486 15.0032 8.16727 15.0668L8.30897 14.8024ZM1.29011 7.72081C1.31557 7.72081 1.34468 7.72745 1.37175 7.74514C1.39802 7.76231 1.41394 7.78437 1.42309 7.8023C1.43191 7.81958 1.43557 7.8351 1.43727 7.84507C1.43817 7.8504 1.43869 7.85518 1.43898 7.85922C1.43913 7.86127 1.43923 7.8632 1.43929 7.865C1.43932 7.86591 1.43934 7.86678 1.43936 7.86763C1.43936 7.86805 1.43937 7.86847 1.43937 7.86888C1.43937 7.86909 1.43937 7.86929 1.43938 7.86949C1.43938 7.86959 1.43938 7.86969 1.43938 7.86979C1.43938 7.86984 1.43938 7.86992 1.43938 7.86994C1.43938 7.87002 1.43938 7.87009 1.28938 7.8701C1.13938 7.8701 1.13938 7.87017 1.13938 7.87025C1.13938 7.87027 1.13938 7.87035 1.13938 7.8704C1.13938 7.8705 1.13938 7.8706 1.13938 7.8707C1.13938 7.8709 1.13938 7.87111 1.13938 7.87131C1.13939 7.87173 1.13939 7.87214 1.1394 7.87257C1.13941 7.87342 1.13943 7.8743 1.13946 7.8752C1.13953 7.87701 1.13962 7.87896 1.13978 7.88103C1.14007 7.88512 1.14059 7.88995 1.14151 7.89535C1.14323 7.90545 1.14694 7.92115 1.15585 7.93861C1.16508 7.95672 1.18114 7.97896 1.20762 7.99626C1.2349 8.01409 1.26428 8.02081 1.29011 8.02081V7.72081ZM1.43197 7.82354C0.623164 5.34647 1.53102 2.26869 4.3994 1.36184L4.30896 1.0758C1.23531 2.04755 0.302663 5.33142 1.14679 7.91665L1.43197 7.82354ZM4.39955 1.36179C5.7527 0.932384 7.22762 1.12136 8.42 1.85949L8.57791 1.60441C7.31141 0.820401 5.74571 0.619858 4.30881 1.07585L4.39955 1.36179ZM8.57801 1.85943C9.73213 1.14371 11.2694 0.945205 12.5951 1.36192L12.685 1.07572C11.2763 0.632908 9.64845 0.842602 8.4199 1.60447L8.57801 1.85943ZM12.5948 1.36184C15.4664 2.27018 16.3769 5.34745 15.5689 7.82356L15.8541 7.91663C16.6975 5.33188 15.7617 2.04893 12.6853 1.07581L12.5948 1.36184ZM15.5686 7.8243C14.9453 9.76841 13.2952 11.4801 11.7526 12.7288C10.2142 13.974 8.80513 14.7411 8.69378 14.8011L8.83606 15.0652C8.9555 15.0009 10.3826 14.2236 11.9413 12.9619C13.4957 11.7037 15.2034 9.94602 15.8543 7.91589L15.5686 7.8243ZM8.69334 14.8013C8.6337 14.8337 8.56752 14.85 8.50115 14.85V15.15C8.61648 15.15 8.73201 15.1217 8.83649 15.065L8.69334 14.8013Z" fill="currentColor"/>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209Z" fill="currentColor"/>
                                 <path d="M12.8384 6.93209C12.5548 6.93209 12.3145 6.71865 12.2911 6.43693C12.2427 5.84618 11.8397 5.34743 11.266 5.1656C10.9766 5.07361 10.8184 4.76962 10.9114 4.48718C11.0059 4.20402 11.3129 4.05023 11.6031 4.13934C12.6017 4.45628 13.3014 5.32371 13.3872 6.34925C13.4113 6.64606 13.1864 6.90622 12.8838 6.92993C12.8684 6.93137 12.8538 6.93209 12.8384 6.93209" stroke="currentColor" stroke-width="0.3"/>
                              </svg>
                              Add Wishlist
                           </button>
                           <button type="button" class="tp-product-details-action-sm-btn">
                              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M8.575 12.6927C8.775 12.6927 8.94375 12.6249 9.08125 12.4895C9.21875 12.354 9.2875 12.1878 9.2875 11.9907C9.2875 11.7937 9.21875 11.6275 9.08125 11.492C8.94375 11.3565 8.775 11.2888 8.575 11.2888C8.375 11.2888 8.20625 11.3565 8.06875 11.492C7.93125 11.6275 7.8625 11.7937 7.8625 11.9907C7.8625 12.1878 7.93125 12.354 8.06875 12.4895C8.20625 12.6249 8.375 12.6927 8.575 12.6927ZM8.55625 5.0638C8.98125 5.0638 9.325 5.17771 9.5875 5.40553C9.85 5.63335 9.98125 5.92582 9.98125 6.28294C9.98125 6.52924 9.90625 6.77245 9.75625 7.01258C9.60625 7.25272 9.3625 7.5144 9.025 7.79763C8.7 8.08087 8.44063 8.3795 8.24688 8.69352C8.05313 9.00754 7.95625 9.29385 7.95625 9.55246C7.95625 9.68792 8.00938 9.79567 8.11563 9.87572C8.22188 9.95576 8.34375 9.99578 8.48125 9.99578C8.63125 9.99578 8.75625 9.94653 8.85625 9.84801C8.95625 9.74949 9.01875 9.62635 9.04375 9.47857C9.08125 9.23228 9.16562 9.0137 9.29688 8.82282C9.42813 8.63195 9.63125 8.42568 9.90625 8.20402C10.2812 7.89615 10.5531 7.58829 10.7219 7.28042C10.8906 6.97256 10.975 6.62775 10.975 6.246C10.975 5.59333 10.7594 5.06996 10.3281 4.67589C9.89688 4.28183 9.325 4.0848 8.6125 4.0848C8.1375 4.0848 7.7 4.17716 7.3 4.36187C6.9 4.54659 6.56875 4.81751 6.30625 5.17463C6.20625 5.31009 6.16563 5.44863 6.18438 5.59025C6.20313 5.73187 6.2625 5.83962 6.3625 5.91351C6.5 6.01202 6.64688 6.04281 6.80313 6.00587C6.95937 5.96892 7.0875 5.88272 7.1875 5.74726C7.35 5.5256 7.54688 5.35627 7.77813 5.23929C8.00938 5.1223 8.26875 5.0638 8.55625 5.0638ZM8.5 15.7775C7.45 15.7775 6.46875 15.5897 5.55625 15.2141C4.64375 14.8385 3.85 14.3182 3.175 13.6532C2.5 12.9882 1.96875 12.2062 1.58125 11.3073C1.19375 10.4083 1 9.43547 1 8.38873C1 7.35431 1.19375 6.38762 1.58125 5.48866C1.96875 4.58969 2.5 3.80772 3.175 3.14273C3.85 2.47775 4.64375 1.95438 5.55625 1.57263C6.46875 1.19088 7.45 1 8.5 1C9.5375 1 10.5125 1.19088 11.425 1.57263C12.3375 1.95438 13.1313 2.47775 13.8063 3.14273C14.4813 3.80772 15.0156 4.58969 15.4094 5.48866C15.8031 6.38762 16 7.35431 16 8.38873C16 9.43547 15.8031 10.4083 15.4094 11.3073C15.0156 12.2062 14.4813 12.9882 13.8063 13.6532C13.1313 14.3182 12.3375 14.8385 11.425 15.2141C10.5125 15.5897 9.5375 15.7775 8.5 15.7775ZM8.5 14.6692C10.2625 14.6692 11.7656 14.0534 13.0094 12.822C14.2531 11.5905 14.875 10.1128 14.875 8.38873C14.875 6.6647 14.2531 5.18695 13.0094 3.95549C11.7656 2.72404 10.2625 2.10831 8.5 2.10831C6.7125 2.10831 5.20312 2.72404 3.97188 3.95549C2.74063 5.18695 2.125 6.6647 2.125 8.38873C2.125 10.1128 2.74063 11.5905 3.97188 12.822C5.20312 14.0534 6.7125 14.6692 8.5 14.6692Z" fill="currentColor" stroke="currentColor" stroke-width="0.3"/>
                              </svg>
                              Ask a question
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
          
      </main>
      

      <!-- footer area start -->
      <footer>
         <div class="tp-footer-area" data-bg-color="footer-bg-grey">
            <div class="tp-footer-top pt-95 pb-40">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-1 mb-50">
                           <div class="tp-footer-widget-content">
                              <div class="tp-footer-logo">
                                 <a href="index.html">
                                    <img src="assets/img/logo/logo.svg" alt="logo">
                                 </a>
                              </div>
                              <p class="tp-footer-desc">We are a team of designers and developers that create high quality WordPress</p>
                              <div class="tp-footer-social">
                                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                 <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-2 mb-50">
                           <h4 class="tp-footer-widget-title">My Account</h4>
                           <div class="tp-footer-widget-content">
                              <ul>
                                 <li><a href="#">Track Orders</a></li>
                                 <li><a href="#">Shipping</a></li>
                                 <li><a href="#">Wishlist</a></li>
                                 <li><a href="#">My Account</a></li>
                                 <li><a href="#">Order History</a></li>
                                 <li><a href="#">Returns</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-3 mb-50">
                           <h4 class="tp-footer-widget-title">Infomation</h4>
                           <div class="tp-footer-widget-content">
                              <ul>
                                 <li><a href="#">Our Story</a></li>
                                 <li><a href="#">Careers</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Terms & Conditions</a></li>
                                 <li><a href="#">Latest News</a></li>
                                 <li><a href="#">Contact Us</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-4 mb-50">
                           <h4 class="tp-footer-widget-title">Talk To Us</h4>
                           <div class="tp-footer-widget-content">
                              <div class="tp-footer-talk mb-20">
                                 <span>Got Questions? Call us</span>
                                 <h4><a href="tel:670-413-90-762">+670 413 90 762</a></h4>
                              </div>
                              <div class="tp-footer-contact">
                                 <div class="tp-footer-contact-item d-flex align-items-start">
                                    <div class="tp-footer-contact-icon">
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6H5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M13 5.40039L10.496 7.40039C9.672 8.05639 8.32 8.05639 7.496 7.40039L5 5.40039" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M1 11.4004H5.8" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M1 8.19922H3.4" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="tp-footer-contact-content">
                                       <p><a href="mailto:shofy@support.com">shofy@support.com</a></p>
                                    </div>
                                 </div>
                                 <div class="tp-footer-contact-item d-flex align-items-start">
                                    <div class="tp-footer-contact-icon">
                                       <span>
                                          <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M8.50001 10.9417C9.99877 10.9417 11.2138 9.72668 11.2138 8.22791C11.2138 6.72915 9.99877 5.51416 8.50001 5.51416C7.00124 5.51416 5.78625 6.72915 5.78625 8.22791C5.78625 9.72668 7.00124 10.9417 8.50001 10.9417Z" stroke="currentColor" stroke-width="1.5"/>
                                             <path d="M1.21115 6.64496C2.92464 -0.887449 14.0841 -0.878751 15.7889 6.65366C16.7891 11.0722 14.0406 14.8123 11.6313 17.126C9.88298 18.8134 7.11704 18.8134 5.36006 17.126C2.95943 14.8123 0.210885 11.0635 1.21115 6.64496Z" stroke="currentColor" stroke-width="1.5"/>
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="tp-footer-contact-content">
                                       <p><a href="https://www.google.com/maps/place/Sleepy+Hollow+Rd,+Gouverneur,+NY+13642,+USA/@44.3304966,-75.4552367,17z/data=!3m1!4b1!4m6!3m5!1s0x4cccddac8972c5eb:0x56286024afff537a!8m2!3d44.3304928!4d-75.453048!16s%2Fg%2F1tdsjdj4" target="_blank">79 Sleepy Hollow St. <br> Jamaica, New York 1432</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-footer-bottom">
               <div class="container">
                  <div class="tp-footer-bottom-wrapper">
                     <div class="row align-items-center">
                        <div class="col-md-6">
                           <div class="tp-footer-copyright">
                              <p>© 2023 All Rights Reserved  |  HTML Template by <a href="index.html">Themepure</a>.</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="tp-footer-payment text-md-end">
                              <p>
                                 <img src="assets/img/footer/footer-pay.png" alt="">
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer area end -->



      <!-- JS here -->
      <script src="assets/js/vendor/jquery.js"></script>
      <script src="assets/js/vendor/waypoints.js"></script>
      <script src="assets/js/bootstrap-bundle.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/range-slider.js"></script>
      <script src="assets/js/magnific-popup.js"></script>
      <script src="assets/js/nice-select.js"></script>
      <script src="assets/js/purecounter.js"></script>
      <script src="assets/js/countdown.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/isotope-pkgd.js"></script>
      <script src="assets/js/imagesloaded-pkgd.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/main.js"></script>
   </body>

<!-- Mirrored from html.storebuild.shop/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Mar 2025 13:04:45 GMT -->
</html>
