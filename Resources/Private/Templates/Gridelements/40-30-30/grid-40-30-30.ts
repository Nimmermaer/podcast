tt_content.gridelements_pi1.20.10.setup.grid-40-30-30 {
    columns {
        20 {
            renderObj =< tt_content
            wrap = <div class="col-lg-4 col-lg-offset-1">|</div>
        }

        21 {
            renderObj =< tt_content
            wrap = <div class="col-lg-3">|</div>
        }

        22 {
            renderObj =< tt_content
            wrap = <div class="col-lg-3">|</div>
        }
    }

    wrap = <div class="container mtb"><div class="row">|</div></div>
    prepend < lib.stdheader
}