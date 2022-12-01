<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    {$escape_html=}
    {html_options name=foo options=$options selected=$select}
    <br>

    {assign var=foo value=[1,2,3,4,5,6,7,8,9,10]}
    {foreach $foo as $f}
    {$f*5}<br>
    {/foreach}

    {"Hello"|cat:"Prince"} <br>

    {counter start=10 }<br>
    {counter} <br>
    {counter}


    <table>
        {section name=rows loop=$data}
        <tr class="{cycle values='odd,even'}">
            <td>{$data[rows]}</td>
            <td>{$data[rows]}</td>
            <td>{$data[rows]}</td>
        </tr>
        {/section}
    </table>



    {$string1|lower}
    {$string2|lower}
    <br>

    {$string1|replace:'ucertify':'uCertify'}
    {$string2|replace:'ucertify':'uCertify'}

    {$string1|wordwrap:30}
    {$string2|wordwrap:30}

    <br><br>
    {$string1|cat:$string2}


    <br>

    {html_checkboxes name='id' options=$cust selected=$customer separator='<br />'}
    {html_radios name='id' options=$cust selected=$customer separator='<br />'}

    <br>

    {$num%2==0}

    <br>
    {assign var=foo value=[1,2,3,4,5,6,7,8,9,10]} <br>
    {foreach $foo as $f}
    {$f*$num}<br>
    {/foreach}


    <p>Escape</p>
    {$email|escape:'mail'}
    {foreach $Contacts as $data}
    {$data|print_r}
    {/foreach}
    <ul>
        {foreach $our_culture as $data}
        <li> {print_r($data)}</li>
        {/foreach}
    </ul>

    {if{math equation="$num%2"} eq '0'}
    even
    {else}
    odd
    {/if}

</body>

</html>