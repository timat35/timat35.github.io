cd C:\local_website\tichana\img\boutique

for  %%i in (*) do (
	magick %%i -sampling-factor 4:2:0 -strip -quality 85 -interlace JPEG -colorspace RGB  %%i

)

cd C:\local_website\tools