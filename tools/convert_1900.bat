cd C:\local_websites\tools\base

for  %%i in (*) do (
	magick %%i -resize 1296  %%i
)

cd C:\local_websites\tools