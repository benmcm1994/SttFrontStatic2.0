window.config = {
    production: {{ $page->production ? "true" : "false" }},
    api_url: "{{ $page->apiUrl }}",
    validate: {{ $page->validate ? "true" : "false" }}
};