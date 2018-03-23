cd C:\local_website\tichana\img\news

for  %%i in (*) do (
	magick %%i -depth 24 -define png:compression-filter=2 -define png:compression-level=9 -define png:compression-strategy=1 thumb-%%i
)

cd C:\local_website\tools