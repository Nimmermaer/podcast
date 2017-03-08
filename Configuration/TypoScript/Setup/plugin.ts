plugin.tx_podcast {
    view {
        templateRootPaths.0 = {$plugin.tx_podcast.view.templateRootPath}
        partialRootPaths.0 = {$plugin.tx_podcast.view.partialRootPath}
        layoutRootPaths.0 = {$plugin.tx_podcast.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_podcast.persistence.storagePid}
    }
}

plugin.tx_podcast_related {
	view {
		templateRootPaths.0 = {$plugin.tx_podcast_related.view.templateRootPath}
		partialRootPaths.0 = {$plugin.tx_podcast_related.view.partialRootPath}
		layoutRootPaths.0 = {$plugin.tx_podcast_related.view.layoutRootPath}
	}
	persistence {
		storagePid = {$plugin.tx_podcast_related.persistence.storagePid}
	}
}
plugin.tx_podcast_rssfeed {
	view {
		templateRootPaths.0 = {$plugin.tx_podcast_related.view.templateRootPath}
		partialRootPaths.0 = {$plugin.tx_podcast_related.view.partialRootPath}
		layoutRootPaths.0 = {$plugin.tx_podcast_related.view.layoutRootPath}
	}
	persistence {
		storagePid = {$plugin.tx_podcast_related.persistence.storagePid}
	}
}

plugin.tx_podcast_portfolio {
	view {
		templateRootPaths.0 = {$plugin.tx_podcast_portfolio.view.templateRootPath}
		partialRootPaths.0 = {$plugin.tx_podcast_portfolio.view.partialRootPath}
		layoutRootPaths.0 = {$plugin.tx_podcast_portfolio.view.layoutRootPath}
	}
	persistence {
		storagePid = {$plugin.tx_podcast_portfolio.persistence.storagePid}
	}
	settings {
		detailpid = {$globals.detailPid}
	}
}
plugin.tx_podcast_sociallinks {
	view {
		templateRootPaths.0 = {$plugin.tx_podcast_sociallinks.view.templateRootPath}
		partialRootPaths.0 = {$plugin.tx_podcast_sociallinks.view.partialRootPath}
		layoutRootPaths.0 = {$plugin.tx_podcast_sociallinks.view.layoutRootPath}
	}
	persistence {
		storagePid = {$plugin.tx_podcast_sociallinks.persistence.storagePid}
	}
}

plugin.tx_podcast._CSS_DEFAULT_STYLE (
	textarea.f3-form-error {
		background-color:#FF9F9F;
		border: 1px #FF0000 solid;
	}

	input.f3-form-error {
		background-color:#FF9F9F;
		border: 1px #FF0000 solid;
	}

	.tx-podcast table {
		border-collapse:separate;
		border-spacing:10px;
	}

	.tx-podcast table th {
		font-weight:bold;
	}

	.tx-podcast table td {
		vertical-align:top;
	}

	.typo3-messages .message-error {
		color:red;
	}

	.typo3-messages .message-ok {
		color:green;
	}

)
