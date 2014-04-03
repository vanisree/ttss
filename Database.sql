Ways To Find The a keyword in our Table:


SELECT *
FROM YourTable
WHERE Column like 'bob%'
or Column like 'bob%'
or Column like '% bob %'


declare sSubString varchar(255);
declare sWildCardString varchar(255);

set sSubString = 'bob';
set sWildCardString = '%' + sSubString + '%';

SELECT *
FROM YourTable
WHERE Column like sWildCardString
and MyFunction(sSubString, Column) = 1

function MyFunction (
psSubString varchar(255),
psSourceString varchar(max))
return integer
begin
	declare i integer;
	declare iFound integer;
	set i = 1;
	set iFound = 0;
	while i > 0 and iFound = 0
	begin
		set i = CHARINDEX(psSubString, sSourceString, i);
		if i > 0
		begin
			set iFound = 1;
			if i > 1 and CHARINDEX(substring(sSourceString,i,1),'abcdefghijklmnopqrstuvwxyz') > 0
			set iFound = 0;
			if i < length(sSourceString) and CHARINDEX(substring(sSourceString,i+length(sSubString),1),'abcdefghijklmnopqrstuvwxyz') > 0
			set iFound = 0;
		end;
		set i = i + 1;
	end;
	return iFound;
end;


