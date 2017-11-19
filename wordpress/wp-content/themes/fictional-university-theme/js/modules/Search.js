import $ from 'jquery'

class Search {
  // 1. Describe and create/initiate our object.
  constructor() {
    this.$openButton = $('.js-search-trigger')
    this.$closeButton = $('.search-overlay__close')
    this.$searchOverlay = $('.search-overlay')

    this.isOverlayOpen = false

    this.events()
  }

  // 2. Events
  events() {
    this.$openButton.on('click', this.openOverlay.bind(this))
    this.$closeButton.on('click', this.closeOverlay.bind(this))

    $(document).on('keydown', this.keyPressDispatcher.bind(this))
  }

  // 3. Methods (functions, actions...)
  keyPressDispatcher(e) {
    if(83 === e.keyCode && !this.isOverlayOpen) {
      this.openOverlay()
    }
    else if(27 === e.keyCode && this.isOverlayOpen) {
      this.closeOverlay()
    }
  }

  openOverlay() {
    this.$searchOverlay.addClass('search-overlay--active')

    $('body').addClass('body-no-scroll')
    this.isOverlayOpen = true
  }

  closeOverlay() {
    this.$searchOverlay.removeClass('search-overlay--active')

    $('body').removeClass('body-no-scroll')
    this.isOverlayOpen = false
  }
}

export default Search