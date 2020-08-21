{{--
  Title: Test
  Description: Customer testimonial
  Category: formatting
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: edit
  Align: left
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: false
  EnqueueStyle: styles/style.css
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

<blockquote data-{{ $block['id'] }} class="{{ $block['classes'] }}">
sdsd
</blockquote>

<style type="text/css">
  [data-{{$block['id']}}] {
  }
</style>