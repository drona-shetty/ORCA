<div class="side-widget to-right invert-color mix-blend-difference">
    <div class="item">
        <span class="widget label-icons">
            {{-- Facebook Share --}}
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank"
                rel="noopener noreferrer" class="link black black-hover" aria-label="Share on Facebook"
                title="Share on Facebook">
                <i class="icon fab fa-facebook-f"></i>
            </a>

            {{-- X / Twitter Share --}}
            <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(url()->current()) }}"
                target="_blank" rel="noopener noreferrer" class="link black black-hover" aria-label="Share on X"
                title="Share on X">
                <i class="icon fab fa-twitter"></i>
            </a>

            {{-- LinkedIn Share --}}
            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                target="_blank" rel="noopener noreferrer" class="link black black-hover" aria-label="Share on LinkedIn"
                title="Share on LinkedIn">
                <i class="icon fab fa-linkedin-in"></i>
            </a>

            {{-- WhatsApp Share --}}
            <a href="https://api.whatsapp.com/send?text={{ urlencode($article->title . ' - ' . url()->current()) }}"
                target="_blank" rel="noopener noreferrer" class="link black black-hover" aria-label="Share on WhatsApp"
                title="Share on WhatsApp">
                <i class="icon fab fa-whatsapp"></i>
            </a>

            {{-- Download PDF --}}
            <a href="javascript:void(0);" id="download-pdf" class="link black black-hover" aria-label="Download as PDF"
                title="Download as PDF"> <i class="icon fas fa-file-pdf"></i> </a>

            {{-- Vertical / Decorative Line --}}
            <span class="label-line black"></span>
        </span>
    </div>
</div>

<script>
    let printTracked = false;
    let pdfDownloadTriggered = false; /** * Track article action */
    function trackArticleAction(type) {
        fetch('{{ route('article.print') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                article_id: {{ $article->id }},
                action: type
            }),
            keepalive: true
        });
    }

    /** * Normal Print Tracking */
    window.addEventListener('beforeprint', function() {
        // Don't count PDF button as normal print
        if (pdfDownloadTriggered) {
            return;
        }
        if (printTracked) {
            return;
        }
        printTracked = true;
        trackArticleAction('print');
    });

    /** * Download PDF Button */
    document.getElementById('download-pdf').addEventListener('click', function() {
        // Track PDF download
        trackArticleAction('pdf');

        // Prevent beforeprint from counting this as a normal print
        pdfDownloadTriggered = true;

        // Open browser print dialog
        window.print();

        // Reset after print dialog closes
        setTimeout(function() {
            pdfDownloadTriggered = false;
        }, 1000);
    });
</script>
