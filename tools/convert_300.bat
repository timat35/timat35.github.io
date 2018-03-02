cd C:\local_website\tools\img

for  %%i in (*) do (
	magick %%i -resize 300 -sampling-factor 4:2:0 -strip -quality 85 -interlace JPEG -colorspace RGB thumb-%%i
)

cd C:\local_website\tools