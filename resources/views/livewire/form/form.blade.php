<div>
    <section class="ds s-pt-50 s-pb-60 s-py-lg-0 transparent-bg container-px-0 c-gutter-80 intro-section">
        <div class="container ds">
            <div class="row align-items-center justify-content-between">
                <div class="m-auto col-lg-9 text-center" data-animation="fadeInUp">
                    @switch($form)
                    @case("register")
                    <livewire:form.register />
                    @break
                    @case("you_ar")
                    <livewire:form.you-are/>
                    @break
                    @case("department")
                    <livewire:form.department/>
                    @break
                    @case("mode")
                    <livewire:form.mode/>
                    @break
                    @case("persons")
                    <livewire:form.persons/>
                    @break
                    @case("age")
                    <livewire:form.age/>
                    @break
                    @case("finish")
                    <livewire:form.finish/>
                    @break
                    @case("anah")
                    <livewire:form.anah/>
                    @break
                    @endswitch
                </div>
            </div>
        </div>
    </section>
</div>
