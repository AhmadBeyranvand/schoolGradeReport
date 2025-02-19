<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center px-4 py-2 
    bg-[#cbcdda] dark:bg-[#cbcdda] 
    border border-transparent rounded-full font-semibold text-xs text-white 
    dark:text-gray-800 uppercase tracking-widest hover:bg-zinc-400 dark:hover:bg-white 
    focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 
    focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 
    dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>