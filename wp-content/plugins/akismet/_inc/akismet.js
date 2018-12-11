jQuery( function ( $ ) {
	var mshotRemovalTimer = null;
	var mshotSecondTryTimer = null
	var mshotThirdTryTimer = null
	
<<<<<<< HEAD
	var mshotEnabledLinkSelector = 'a[id^="author_comment_url"], tr.pingback td.column-author a:first-of-type, td.comment p a';
	
=======
	$( 'a.activate-option' ).click( function(){
		var link = $( this );
		if ( link.hasClass( 'clicked' ) ) {
			link.removeClass( 'clicked' );
		}
		else {
			link.addClass( 'clicked' );
		}
		$( '.toggle-have-key' ).slideToggle( 'slow', function() {});
		return false;
	});
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
	$('.akismet-status').each(function () {
		var thisId = $(this).attr('commentid');
		$(this).prependTo('#comment-' + thisId + ' .column-comment');
	});
	$('.akismet-user-comment-count').each(function () {
		var thisId = $(this).attr('commentid');
		$(this).insertAfter('#comment-' + thisId + ' .author strong:first').show();
	});
<<<<<<< HEAD

	akismet_enable_comment_author_url_removal();
	
	$( '#the-comment-list' ).on( 'click', '.akismet_remove_url', function () {
=======
	$('#the-comment-list').find('tr.comment, tr[id ^= "comment-"]').find('.column-author a[title]').each(function () {
		// Comment author URLs are the only URL with a title attribute in the author column.
		var thisTitle = $(this).attr('title');

		var thisCommentId = $(this).parents('tr:first').attr('id').split("-");

		$(this).attr("id", "author_comment_url_"+ thisCommentId[1]);

		if (thisTitle) {
			$(this).after(
				$( '<a href="#" class="remove_url">x</a>' )
					.attr( 'commentid', thisCommentId[1] )
					.attr( 'title', WPAkismet.strings['Remove this URL'] )
			);
		}
	});
	$('.remove_url').live('click', function () {
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
		var thisId = $(this).attr('commentid');
		var data = {
			action: 'comment_author_deurl',
			_wpnonce: WPAkismet.comment_author_url_nonce,
			id: thisId
		};
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: data,
			beforeSend: function () {
				// Removes "x" link
				$("a[commentid='"+ thisId +"']").hide();
				// Show temp status
				$("#author_comment_url_"+ thisId).html( $( '<span/>' ).text( WPAkismet.strings['Removing...'] ) );
			},
			success: function (response) {
				if (response) {
					// Show status/undo link
					$("#author_comment_url_"+ thisId)
						.attr('cid', thisId)
						.addClass('akismet_undo_link_removal')
						.html(
							$( '<span/>' ).text( WPAkismet.strings['URL removed'] )
						)
						.append( ' ' )
						.append(
							$( '<span/>' )
								.text( WPAkismet.strings['(undo)'] )
								.addClass( 'akismet-span-link' )
						);
				}
			}
		});

		return false;
<<<<<<< HEAD
	}).on( 'click', '.akismet_undo_link_removal', function () {
=======
	});
	$('.akismet_undo_link_removal').live('click', function () {
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
		var thisId = $(this).attr('cid');
		var thisUrl = $(this).attr('href');
		var data = {
			action: 'comment_author_reurl',
			_wpnonce: WPAkismet.comment_author_url_nonce,
			id: thisId,
			url: thisUrl
		};
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: data,
			beforeSend: function () {
				// Show temp status
				$("#author_comment_url_"+ thisId).html( $( '<span/>' ).text( WPAkismet.strings['Re-adding...'] ) );
			},
			success: function (response) {
				if (response) {
					// Add "x" link
					$("a[commentid='"+ thisId +"']").show();
					// Show link. Core strips leading http://, so let's do that too.
					$("#author_comment_url_"+ thisId).removeClass('akismet_undo_link_removal').text( thisUrl.replace( /^http:\/\/(www\.)?/ig, '' ) );
				}
			}
		});

		return false;
	});

	// Show a preview image of the hovered URL. Applies to author URLs and URLs inside the comments.
<<<<<<< HEAD
	$( '#the-comment-list' ).on( 'mouseover', mshotEnabledLinkSelector, function () {
=======
	$( 'a[id^="author_comment_url"], tr.pingback td.column-author a:first-of-type, table.comments td.comment p a' ).mouseover( function () {
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
		clearTimeout( mshotRemovalTimer );

		if ( $( '.akismet-mshot' ).length > 0 ) {
			if ( $( '.akismet-mshot:first' ).data( 'link' ) == this ) {
				// The preview is already showing for this link.
				return;
			}
			else {
				// A new link is being hovered, so remove the old preview.
				$( '.akismet-mshot' ).remove();
			}
		}

		clearTimeout( mshotSecondTryTimer );
		clearTimeout( mshotThirdTryTimer );

<<<<<<< HEAD
		var thisHref = $( this ).attr( 'href' );

		var mShot = $( '<div class="akismet-mshot mshot-container"><div class="mshot-arrow"></div><img src="' + akismet_mshot_url( thisHref ) + '" width="450" height="338" class="mshot-image" /></div>' );
=======
		var thisHref = $.URLEncode( $( this ).attr( 'href' ) );

		var mShot = $( '<div class="akismet-mshot mshot-container"><div class="mshot-arrow"></div><img src="//s0.wordpress.com/mshots/v1/' + thisHref + '?w=450" width="450" height="338" class="mshot-image" /></div>' );
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
		mShot.data( 'link', this );

		var offset = $( this ).offset();

		mShot.offset( {
			left : Math.min( $( window ).width() - 475, offset.left + $( this ).width() + 10 ), // Keep it on the screen if the link is near the edge of the window.
			top: offset.top + ( $( this ).height() / 2 ) - 101 // 101 = top offset of the arrow plus the top border thickness
		} );

<<<<<<< HEAD
		// These retries appear to be superfluous if .mshot-image has already loaded, but it's because mShots
		// can return a "Generating thumbnail..." image if it doesn't have a thumbnail ready, so we need
		// to retry to see if we can get the newly generated thumbnail.
		mshotSecondTryTimer = setTimeout( function () {
			mShot.find( '.mshot-image' ).attr( 'src', akismet_mshot_url( thisHref, 2 ) );
		}, 6000 );

		mshotThirdTryTimer = setTimeout( function () {
			mShot.find( '.mshot-image' ).attr( 'src', akismet_mshot_url( thisHref, 3 ) );
		}, 12000 );

		$( 'body' ).append( mShot );
	} ).on( 'mouseout', 'a[id^="author_comment_url"], tr.pingback td.column-author a:first-of-type, td.comment p a', function () {
=======
		mshotSecondTryTimer = setTimeout( function () {
			mShot.find( '.mshot-image' ).attr( 'src', '//s0.wordpress.com/mshots/v1/'+thisHref+'?w=450&r=2' );
		}, 6000 );

		mshotThirdTryTimer = setTimeout( function () {
			mShot.find( '.mshot-image' ).attr( 'src', '//s0.wordpress.com/mshots/v1/'+thisHref+'?w=450&r=3' );
		}, 12000 );

		$( 'body' ).append( mShot );
	} ).mouseout( function () {
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
		mshotRemovalTimer = setTimeout( function () {
			clearTimeout( mshotSecondTryTimer );
			clearTimeout( mshotThirdTryTimer );

			$( '.akismet-mshot' ).remove();
		}, 200 );
<<<<<<< HEAD
	} ).on( 'mouseover', 'tr', function () {
		// When the mouse hovers over a comment row, begin preloading mshots for any links in the comment or the comment author.
		var linksToPreloadMshotsFor = $( this ).find( mshotEnabledLinkSelector );
		
		linksToPreloadMshotsFor.each( function () {
			// Don't attempt to preload an mshot for a single link twice. Browser caching should cover this, but in case of
			// race conditions, save a flag locally when we've begun trying to preload one.
			if ( ! $( this ).data( 'akismet-mshot-preloaded' ) ) {
				akismet_preload_mshot( $( this ).attr( 'href' ) );
				$( this ).data( 'akismet-mshot-preloaded', true );
			}
		} );
	} );

	$('.checkforspam:not(.button-disabled)').click( function(e) {
		e.preventDefault();

		$('.checkforspam:not(.button-disabled)').addClass('button-disabled');
		$('.checkforspam-spinner').addClass( 'spinner' ).addClass( 'is-active' );

		// Update the label on the "Check for Spam" button to use the active "Checking for Spam" language.
		$( '.checkforspam .akismet-label' ).text( $( '.checkforspam' ).data( 'active-label' ) );

		akismet_check_for_spam(0, 100);
	});

	var spam_count = 0;
	var recheck_count = 0;

	function akismet_check_for_spam(offset, limit) {
		var check_for_spam_buttons = $( '.checkforspam' );
		
		// We show the percentage complete down to one decimal point so even queues with 100k
		// pending comments will show some progress pretty quickly.
		var percentage_complete = Math.round( ( recheck_count / check_for_spam_buttons.data( 'pending-comment-count' ) ) * 1000 ) / 10;
		
		// Update the progress counter on the "Check for Spam" button.
		$( '.checkforspam-progress' ).text( check_for_spam_buttons.data( 'progress-label-format' ).replace( '%1$s', percentage_complete ) );

=======
	} );

	$('.checkforspam:not(.button-disabled)').click( function(e) {
		$('.checkforspam:not(.button-disabled)').addClass('button-disabled');
		$('.checkforspam-spinner').addClass( 'spinner' );
		akismet_check_for_spam(0, 100);
		e.preventDefault();
	});

	function akismet_check_for_spam(offset, limit) {
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
		$.post(
			ajaxurl,
			{
				'action': 'akismet_recheck_queue',
				'offset': offset,
				'limit': limit
			},
			function(result) {
<<<<<<< HEAD
				recheck_count += result.counts.processed;
				spam_count += result.counts.spam;
				
				if (result.counts.processed < limit) {
					window.location.href = check_for_spam_buttons.data( 'success-url' ).replace( '__recheck_count__', recheck_count ).replace( '__spam_count__', spam_count );
				}
				else {
					// Account for comments that were caught as spam and moved out of the queue.
					akismet_check_for_spam(offset + limit - result.counts.spam, limit);
=======
				if (result.processed < limit) {
					window.location.reload();
				}
				else {
					akismet_check_for_spam(offset + limit, limit);
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
				}
			}
		);
	}
<<<<<<< HEAD
	
	if ( "start_recheck" in WPAkismet && WPAkismet.start_recheck ) {
		$( '.checkforspam' ).click();
	}
	
	if ( typeof MutationObserver !== 'undefined' ) {
		// Dynamically add the "X" next the the author URL links when a comment is quick-edited.
		var comment_list_container = document.getElementById( 'the-comment-list' );

		if ( comment_list_container ) {
			var observer = new MutationObserver( function ( mutations ) {
				for ( var i = 0, _len = mutations.length; i < _len; i++ ) {
					if ( mutations[i].addedNodes.length > 0 ) {
						akismet_enable_comment_author_url_removal();
						
						// Once we know that we'll have to check for new author links, skip the rest of the mutations.
						break;
					}
				}
			} );
			
			observer.observe( comment_list_container, { attributes: true, childList: true, characterData: true } );
		}
	}

	function akismet_enable_comment_author_url_removal() {
		$( '#the-comment-list' )
			.find( 'tr.comment, tr[id ^= "comment-"]' )
			.find( '.column-author a[href^="http"]:first' ) // Ignore mailto: links, which would be the comment author's email.
			.each(function () {
				if ( $( this ).parent().find( '.akismet_remove_url' ).length > 0 ) {
					return;
				}
			
			var linkHref = $(this).attr( 'href' );
		
			// Ignore any links to the current domain, which are diagnostic tools, like the IP address link
			// or any other links another plugin might add.
			var currentHostParts = document.location.href.split( '/' );
			var currentHost = currentHostParts[0] + '//' + currentHostParts[2] + '/';
		
			if ( linkHref.indexOf( currentHost ) != 0 ) {
				var thisCommentId = $(this).parents('tr:first').attr('id').split("-");

				$(this)
					.attr("id", "author_comment_url_"+ thisCommentId[1])
					.after(
						$( '<a href="#" class="akismet_remove_url">x</a>' )
							.attr( 'commentid', thisCommentId[1] )
							.attr( 'title', WPAkismet.strings['Remove this URL'] )
					);
			}
		});
	}
	
	/**
	 * Generate an mShot URL if given a link URL.
	 *
	 * @param string linkUrl
	 * @param int retry If retrying a request, the number of the retry.
	 * @return string The mShot URL;
	 */
	function akismet_mshot_url( linkUrl, retry ) {
		var mshotUrl = '//s0.wordpress.com/mshots/v1/' + encodeURIComponent( linkUrl ) + '?w=900';
		
		if ( retry ) {
			mshotUrl += '&r=' + encodeURIComponent( retry );
		}
		
		return mshotUrl;
	}
	
	/**
	 * Begin loading an mShot preview of a link.
	 *
	 * @param string linkUrl
	 */
	function akismet_preload_mshot( linkUrl ) {
		var img = new Image();
		img.src = akismet_mshot_url( linkUrl );
	}

	/**
	 * Sets the comment form privacy notice display to hide when one clicks Core's dismiss button on the related admin notice.
	 */
	$( '#akismet-privacy-notice-admin-notice' ).on( 'click', '.notice-dismiss', function(){
		$.ajax({
                        url: './options-general.php?page=akismet-key-config&akismet_comment_form_privacy_notice=hide',
		});
	});
=======
});
// URL encode plugin
jQuery.extend({URLEncode:function(c){var o='';var x=0;c=c.toString();var r=/(^[a-zA-Z0-9_.]*)/;
  while(x<c.length){var m=r.exec(c.substr(x));
    if(m!=null && m.length>1 && m[1]!=''){o+=m[1];x+=m[1].length;
    }else{if(c[x]==' ')o+='+';else{var d=c.charCodeAt(x);var h=d.toString(16);
    o+='%'+(h.length<2?'0':'')+h.toUpperCase();}x++;}}return o;}
>>>>>>> 29277210ad8cdfc6c533bb63e35927d86f20c366
});
