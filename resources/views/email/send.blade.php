<h2 style="font-size:45px; color:black">Yeni Blog Eklendi</h2><br>
<p style="font-size: 20px;">
    Haber içeriğine girmek için tıklayın: 
    <a href="{{ route('blog.detail',$blog) }}">
        <span style="font-size: 20px;color:black;font:bold">{{ $blog->title }}</span>
    </a>
</p>
