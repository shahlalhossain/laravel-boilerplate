<footer class="c-footer">
    <div>
        <strong>
            @lang('Copyright') &copy; {{ date('Y') }}
            <x-utils.link href="http://teledaktar.com" target="_blank" :text="__(appName())" />
        </strong>

        @lang('All Rights Reserved')
    </div>

    <div class="mfs-auto">
        @lang('Powered by')
        <x-utils.link href="http://teledaktar.com" target="_blank" :text="__(appName())" />
    </div>
</footer>
