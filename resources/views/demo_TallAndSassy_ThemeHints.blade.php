 <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">

        <div>
        This would be a link to a new page
        <a href="http://google.com" class="{{ config('tallandsassy_themehints.link_to_classes') }}" style="{{ config('tallandsassy_themehints.link_to_style') }}">Google</a>
        </div>
        <hr>
        <div>
        This would Activate a modal
                <a href="http://google.com" class="{{ config('tallandsassy_themehints.popupInnerText_classes') }}" style="{{ config('tallandsassy_themehints.popupInnerText_style') }}" >Google</a>

        </div>
        <hr>

        <div>
        This would be a link to a new tab: <a href="http://google.com"  target="_blank" class="{{ config('tallandsassy_themehints.new_tab_classes') }}" style="{{ config('tallandsassy_themehints.new_tab_style') }}" >Google {!! config('tallandsassy_themehints.new_tab_icon_html') !!}</a>
        </div>
        <hr>
        --- Centered Buttons ---
        <p>
        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6">
                    @component('eleganttechnologies::components.buttons.standard_bottom',['type'=>'Primary'])
                        @slot('text')
                            Button:eleganttechnologies::components.buttons.standard_bottom
                        @endslot
                        @slot('click')
                            alert('hi')
                        @endslot
                    @endcomponent
                    <hr>
                    @component('eleganttechnologies::components.buttons.standard_bottom',['type'=>'Secondary'])
                        @slot('text')
                            A Secondary button
                        @endslot
                        @slot('click')
                            close()
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>

    @include('eleganttechnologies::base')

