cd C:\local_websites\tools\base

for  %%i in (*) do (
	magick %%i -resize 1900 %%i
)

cd C:\local_websites\tools