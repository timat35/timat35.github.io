cd C:\local_website\tools\img

for  %%i in (*) do (
	magick %%i -resize 300 thumb-%%i
)

cd C:\local_website\tools