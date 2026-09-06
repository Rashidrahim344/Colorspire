<button
  type="button"
  class="focus-visible:ring-secondary group inline-flex items-center rounded-lg p-2.5 text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:bg-neutral-100 focus:outline-hidden focus-visible:ring-1 focus-visible:outline-hidden dark:text-neutral-400 dark:ring-zinc-200 dark:hover:bg-neutral-700"
  data-bookmark-button="bookmark-button"
>
  <x-icon name="bookmark" />
</button>

<script>
  (function () {
    class Bookmark {
      static BOOKMARKS_KEY = 'bookmarks';
      bookmarkButton;

      constructor(dataAttrValue) {
        this.bookmarkButton = document.querySelector(
          `[data-bookmark-button="${dataAttrValue}"]`
        );
      }

      getStoredBookmarks() {
        const item = localStorage.getItem(Bookmark.BOOKMARKS_KEY);
        return item ? JSON.parse(item) : [];
      }

      init() {
        if (this.bookmarkButton && this.isStored()) {
          this.markAsStored();
        }

        this.bookmarkButton?.addEventListener('click', () =>
          this.toggleBookmark()
        );
      }

      isStored() {
        return this.getStoredBookmarks().includes(window.location.pathname);
      }

      markAsStored() {
        if (this.bookmarkButton) {
          this.bookmarkButton.classList.add('bookmarked');
          let svgElement = this.bookmarkButton.querySelector('svg');
          if (svgElement) {
            svgElement.setAttribute(
              'class',
              'h-6 w-6 fill-red-500 dark:fill-red-500'
            );
          }
          let pathElement = svgElement?.querySelector('path');
          if (pathElement) {
            pathElement.setAttribute(
              'class',
              'fill-current text-red-500 dark:text-red-500'
            );
          }
        }
      }

      unmarkAsStored() {
        if (this.bookmarkButton) {
          this.bookmarkButton.classList.remove('bookmarked');
          let svgElement = this.bookmarkButton.querySelector('svg');
          if (svgElement) {
            svgElement.setAttribute('class', 'h-6 w-6 fill-none');
          }
          let pathElement = svgElement?.querySelector('path');
          if (pathElement) {
            pathElement.setAttribute(
              'class',
              'fill-current text-neutral-500 group-hover:text-red-400 dark:text-neutral-500 dark:group-hover:text-red-400'
            );
          }
        }
      }

      toggleBookmark() {
        let storedBookmarks = this.getStoredBookmarks();
        const index = storedBookmarks.indexOf(window.location.pathname);
        if (index !== -1) {
          storedBookmarks.splice(index, 1);
          this.unmarkAsStored();
        } else {
          storedBookmarks.push(window.location.pathname);
          this.markAsStored();
        }
        localStorage.setItem(
          Bookmark.BOOKMARKS_KEY,
          JSON.stringify(storedBookmarks)
        );
      }
    }

    new Bookmark('bookmark-button').init();
  })();
</script>
