<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Morning Sale Update</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .header {
                text-align: center;
            }
            .header h4{
                color: #2ac9bc;
            }
            .gemcolor {
                color: #2ac9bc;
            }
            .small-and-gray {
                color: #a3a3a3;
                size: 10px;
                font-weight: normal;
            }
            .bold-and-gray {
                color: #a3a3a3;
                size: 15px;
                font-weight: bold;
            }
            .bold {
                font-weight: bold;
            }
            .green-dot {
                height: 20px;
                width: 20px;
                background-color: #5f9667;
                border-radius: 50%;
                display: inline-block;
                color: #02450d;
                text-align: center;
                opacity: 0.7;
            }
            .red-dot {
                height: 20px;
                width: 20px;
                background-color: #f3d1cf;
                border-radius: 50%;
                display: inline-block;
                color: #86120c;
                text-align: center;
            }
            .avatar {
                width: 120px;
                height: 120px;
            }
            .full {
                width: 100%;
                height: 100%;
            }
            table {
               margin: 0 auto; /* or margin: 0 auto 0 auto */
            }
            .padding10 {
                padding-left: 10px;
            }
            .absolute {
                position: absolute;
            }
            .ml-2 {
                margin-left: 2px;
            }
            .pl-23 {
                padding-left: 23px;
            }
            .pl-46 {
                padding-left: 46px;
            }
        </style>
    </head>
    <body class="antialiased full">
        <div class="header">
            <h2>
                <svg width="200px" height="100%" viewBox="0 0 212 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M174.632 10.9082V22.8976C174.632 23.3648 174.25 23.7467 173.783 23.7467H172.012C171.545 23.7467 171.163 23.3648 171.163 22.8976V6.66655C171.163 6.19935 171.545 5.81738 172.012 5.81738H173.783C173.858 5.81738 173.967 5.82681 174.087 5.8732C174.202 5.91706 174.292 5.98069 174.362 6.0464L180.798 11.9458L187.205 6.04741C187.274 5.98137 187.366 5.91731 187.48 5.8732C187.601 5.82681 187.709 5.81738 187.785 5.81738H189.556C189.957 5.81738 190.427 6.14303 190.399 6.69343V22.8914C190.399 23.3586 190.017 23.7406 189.55 23.7406H187.779C187.312 23.7406 186.93 23.3587 186.93 22.8914V10.9124L181.375 16.0647C181.026 16.3991 180.532 16.3342 180.247 16.0968L180.232 16.0844L174.632 10.9082ZM68.3877 18.0143C68.3877 19.982 68.0484 21.2809 66.9993 22.3299L66.9976 22.3318C65.9476 23.3741 64.6196 23.7426 62.6839 23.7426H56.2048C54.2742 23.7426 52.9339 23.3823 51.8873 22.328C50.8479 21.2808 50.501 19.985 50.501 18.0143V6.71126C50.501 6.24397 50.8829 5.86204 51.3503 5.86204H53.1211C53.5884 5.86204 53.9704 6.24397 53.9704 6.71126V17.7029C53.9704 18.3998 54.0089 18.9085 54.093 19.2866C54.1753 19.6561 54.2911 19.8534 54.4141 19.9762C54.5366 20.099 54.7339 20.2146 55.1037 20.297C55.4814 20.3813 55.9901 20.4199 56.6873 20.4199H62.1951C62.8922 20.4199 63.401 20.3813 63.7791 20.297C64.1484 20.2146 64.3458 20.099 64.4687 19.9762C64.5913 19.8534 64.707 19.6561 64.7894 19.2866C64.8735 18.9085 64.9124 18.3998 64.9124 17.7029V6.71126C64.9124 6.24393 65.2944 5.86204 65.7613 5.86204H67.5325C67.9804 5.86204 68.3358 6.20235 68.3831 6.62755L68.3877 6.66926V18.0143ZM85.1776 16.9434L85.1801 16.9459L85.1831 16.9485C85.3973 17.1401 85.5537 17.3925 85.5537 18.4296C85.5537 19.444 85.3614 19.8183 85.1201 20.0117C84.8218 20.2511 84.2151 20.4199 82.8853 20.4199H72.9503C72.483 20.4199 72.101 20.8018 72.101 21.2691V22.8934C72.101 23.3607 72.483 23.7426 72.9503 23.7426H83.3738C85.2739 23.7426 86.588 23.3708 87.6511 22.3375C88.6504 21.3684 89.0227 20.1285 89.0227 18.4296C89.0227 16.7665 88.647 15.544 87.6625 14.5574C86.6206 13.4874 85.3251 13.141 83.3679 13.141H77.4934C76.1632 13.141 75.5548 12.9737 75.2556 12.7361C75.0165 12.5459 74.8251 12.1788 74.8251 11.1751C74.8251 10.1606 75.0173 9.78634 75.2582 9.5929C75.5569 9.3535 76.1637 9.18473 77.4934 9.18473H87.447C87.9139 9.18473 88.2959 8.80281 88.2959 8.33557V6.71126C88.2959 6.24402 87.9139 5.86204 87.447 5.86204H77.0108C75.1145 5.86204 73.7979 6.2261 72.7327 7.26786C71.7342 8.23695 71.362 9.47658 71.362 11.1751C71.362 12.8409 71.7482 14.1038 72.7344 15.0594L72.7356 15.0604C73.8038 16.0913 75.1158 16.4637 77.0108 16.4637H82.8853C84.4217 16.4637 84.843 16.638 85.1776 16.9434ZM145.811 20.4155V13.9858C145.811 13.5186 146.193 13.1366 146.66 13.1366H148.284C148.767 13.1366 149.087 13.5184 149.134 13.8919L149.139 13.9386V22.8951C149.139 23.3625 148.757 23.7443 148.29 23.7443H137.171C135.237 23.7443 133.906 23.3832 132.855 22.3317L132.853 22.3297C131.813 21.2825 131.467 19.9867 131.467 18.0161V11.5615C131.467 9.60981 131.807 8.31828 132.855 7.27036L132.857 7.26841C133.906 6.22623 135.235 5.85769 137.171 5.85769H146.678C147.145 5.85769 147.527 6.23966 147.527 6.70686V8.33117C147.527 8.79837 147.145 9.18038 146.678 9.18038H137.653C136.956 9.18038 136.447 9.21896 136.069 9.30326C135.7 9.38561 135.502 9.50126 135.379 9.62409C135.257 9.74688 135.141 9.94416 135.059 10.3137C134.974 10.6917 134.936 11.2004 134.936 11.8974V17.6985C134.936 18.3955 134.974 18.9041 135.059 19.2822C135.141 19.6517 135.257 19.849 135.379 19.9718C135.502 20.0946 135.7 20.2103 136.069 20.2926C136.447 20.3769 136.956 20.4155 137.653 20.4155H145.811ZM207.311 16.9434L207.314 16.9459L207.316 16.9485C207.53 17.14 207.687 17.3925 207.687 18.4296C207.687 19.444 207.495 19.8183 207.254 20.0117C206.955 20.2511 206.348 20.4199 205.019 20.4199H195.083C194.616 20.4199 194.234 20.8019 194.234 21.2691V22.8934C194.234 23.3605 194.616 23.7426 195.083 23.7426H205.507C207.407 23.7426 208.721 23.3709 209.784 22.3379C210.784 21.3687 211.156 20.1287 211.156 18.4296C211.156 16.7658 210.78 15.543 209.795 14.5562C208.754 13.495 207.462 13.141 205.501 13.141H199.627C198.296 13.141 197.688 12.9737 197.389 12.7361C197.15 12.5459 196.958 12.1788 196.958 11.1751C196.958 10.1606 197.15 9.78634 197.392 9.5929C197.69 9.3535 198.297 9.18473 199.627 9.18473H209.58C210.047 9.18473 210.429 8.80281 210.429 8.33557V6.71126C210.429 6.24402 210.047 5.86204 209.58 5.86204H199.144C197.248 5.86204 195.931 6.22606 194.866 7.26782C193.867 8.23686 193.495 9.47654 193.495 11.1751C193.495 12.8409 193.882 14.1038 194.868 15.0594L194.869 15.0605C195.937 16.0913 197.249 16.4637 199.144 16.4637H205.019C206.555 16.4637 206.976 16.638 207.311 16.9434ZM95.3324 20.4199H107.441C107.641 20.4199 107.866 20.4898 108.044 20.667C108.221 20.8442 108.291 21.0694 108.291 21.2691V22.8934C108.291 23.3606 107.909 23.7426 107.441 23.7426H92.7127C92.2453 23.7426 91.8634 23.3606 91.8634 22.8934V6.71126C91.8634 6.24406 92.2453 5.86204 92.7127 5.86204H107.441C107.909 5.86204 108.291 6.24406 108.291 6.71126V8.33557C108.291 8.80276 107.909 9.18473 107.441 9.18473H95.3324V13.141H103.38C103.848 13.141 104.23 13.5229 104.23 13.9901V15.59C104.23 16.0574 103.848 16.4392 103.38 16.4392H95.3324V20.4199ZM167.82 20.4199H155.712V16.4392H163.76C164.227 16.4392 164.609 16.0572 164.609 15.59V13.9901C164.609 13.523 164.227 13.141 163.76 13.141H155.712V9.18473H167.82C168.287 9.18473 168.67 8.80297 168.67 8.33557V6.71126C168.67 6.24381 168.287 5.86204 167.82 5.86204H153.092C152.624 5.86204 152.242 6.24406 152.242 6.71126V22.8934C152.242 23.3606 152.624 23.7426 153.092 23.7426H167.82C168.287 23.7426 168.67 23.3608 168.67 22.8934V21.2691C168.67 21.0693 168.6 20.8441 168.423 20.6669C168.245 20.4897 168.02 20.4199 167.82 20.4199ZM124.851 17.9463L128.793 22.3482L128.812 22.3736C128.892 22.4803 128.949 22.6086 128.973 22.7461C128.997 22.8835 128.999 23.1022 128.868 23.3195C128.766 23.4885 128.525 23.7406 128.133 23.7406H125.686C125.435 23.7406 125.224 23.6342 125.078 23.4898L125.055 23.4661L120.515 18.0753H114.292V22.8973C114.292 23.3692 113.905 23.7467 113.441 23.7467H111.654C111.191 23.7467 110.804 23.3692 110.804 22.8973V6.66681C110.804 6.19496 111.191 5.81738 111.654 5.81738H123.068C125.016 5.81738 126.357 6.17895 127.416 7.23195L127.418 7.23389C128.467 8.28351 128.817 9.5831 128.817 11.5604V12.3383C128.817 14.312 128.474 15.6146 127.417 16.6658C126.719 17.3643 125.894 17.7593 124.851 17.9463ZM125.336 12.0259V11.8789C125.336 10.419 125.154 9.86426 124.887 9.59886C124.763 9.47468 124.562 9.35797 124.188 9.27503C123.805 9.19023 123.29 9.15152 122.587 9.15152H114.304V14.7532H122.587C123.29 14.7532 123.805 14.7145 124.188 14.6297C124.562 14.5468 124.763 14.4301 124.887 14.3059C125.154 14.0405 125.336 13.4858 125.336 12.0259Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M42.2599 8.62882L33.7518 0.139405L8.4551 0.139404L0 8.62882L21.13 29.7587L42.2599 8.62882ZM31.1528 4.30755L28.2864 4.29188H25.4356L21.2164 8.51106L28.2864 15.581L35.3563 8.51106L31.1528 4.30755Z" fill="#2AC9BC"></path>
                </svg>
            </h2>
            <h4>Your Morning Update</h4>
        </div>
        <div>
            <table>
                <tr>
                    <td class="bold" colspan="2">
                        <span class="gemcolor">{{ $data['start'] }}</span> - {{ $data['end'] }} | {{ $data['title'] }} <span class="green-dot">✔</span> <span class="small-and-gray">({{ $data['duration'] }} min)</span>
                        <br>
                        <span class="small-and-gray">
                            Joining from UserGems:
                            @foreach($data['joining_from_usergems'] as $manager)
                                <span class="bold">{{ $manager['name'] }}</span> @if ($manager['accepted'])<span class="green-dot">✔</span> @else <span class="red-dot">✕</span> @endif
                            @endforeach
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h5>
                            <a href="#" class="gemcolor"><b>{{ $data['company_name'] }}</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="20x20" fill="currentColor" class="mercado-match absolute" width="20" height="20" focusable="false">
                                <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
                            </svg>
                            <svg class="absolute pl-23" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" data-name="Layer 1" viewBox="0 0 100 100" x="0px" y="0px" version="1.1" id="svg76" sodipodi:docname="noun_people_3376085.svg" width="20" height="20" inkscape:version="1.0.1 (3bc2e813f5, 2020-09-07)">
                                <metadata id="metadata82">
                                    <rdf:RDF>
                                        <cc:Work rdf:about="">
                                            <dc:format>image/svg+xml</dc:format>
                                            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
                                            <dc:title>Essential Icon Set Outline</dc:title>
                                        </cc:Work>
                                    </rdf:RDF>
                                </metadata>
                                <defs id="defs80"/>
                                <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1266" inkscape:window-height="892" id="namedview78" showgrid="false" inkscape:zoom="6.6556426" inkscape:cx="28.117912" inkscape:cy="56.617449" inkscape:window-x="26" inkscape:window-y="23" inkscape:window-maximized="0" inkscape:current-layer="svg76"/>
                                <title id="title62">Essential Icon Set Outline</title>
                                <g id="g148" transform="matrix(1.6480449,0,0,1.6480449,-2.7779358,-3.690144)">
                                    <path d="M 23.71,21.59 A 8.29,8.29 0 1 0 32,13.3 8.3,8.3 0 0 0 23.71,21.59 Z m 14.58,0 A 6.29,6.29 0 1 1 32,15.3 a 6.29,6.29 0 0 1 6.29,6.29 z" id="path64"/>
                                    <path d="m 48.92,30.73 a 12,12 0 0 0 -7.85,2.92 15.21,15.21 0 0 0 -18.14,0 A 12.06,12.06 0 0 0 3,42.81 v 2.92 a 1,1 0 0 0 1,1 h 12.71 v 3 a 1,1 0 0 0 1,1 h 28.58 a 1,1 0 0 0 1,-1 v -3 H 60 a 1,1 0 0 0 1,-1 V 42.81 A 12.09,12.09 0 0 0 48.92,30.73 Z M 5,42.81 a 10.08,10.08 0 0 1 16.38,-7.87 l -0.2,0.22 -0.39,0.41 c -0.22,0.24 -0.44,0.49 -0.65,0.74 l -0.35,0.45 c -0.21,0.27 -0.4,0.55 -0.58,0.83 -0.18,0.28 -0.2,0.29 -0.29,0.44 -0.2,0.34 -0.4,0.7 -0.58,1.06 0,0.09 -0.1,0.18 -0.14,0.27 -0.22,0.46 -0.41,0.93 -0.59,1.41 0,0.12 -0.07,0.24 -0.11,0.36 -0.12,0.36 -0.23,0.73 -0.32,1.1 -0.05,0.17 -0.08,0.35 -0.12,0.52 -0.07,0.33 -0.13,0.66 -0.17,1 -0.04,0.34 -0.05,0.38 -0.07,0.57 -0.02,0.19 -0.05,0.28 -0.06,0.42 H 5 Z m 13.71,5.89 v -2.82 a 0.66,0.66 0 0 0 0,-0.14 13.28,13.28 0 0 1 21.75,-10 c 0.32,0.28 0.63,0.56 0.92,0.85 a 13.18,13.18 0 0 1 3.89,9.2 c 0,0 0,0.09 0,0.11 v 2.8 z M 59,44.7 H 47.24 c 0,-0.1 0,-0.19 0,-0.29 0,-0.1 -0.05,-0.41 -0.07,-0.62 C 47.15,43.58 47.05,43.3 47,43 46.95,42.7 46.92,42.59 46.87,42.39 46.82,42.19 46.74,41.88 46.67,41.62 L 46.49,41.03 C 46.4,40.78 46.31,40.54 46.21,40.29 46.11,40.04 46.06,39.91 45.98,39.73 45.9,39.55 45.75,39.24 45.63,39 c -0.12,-0.24 -0.17,-0.36 -0.27,-0.53 -0.1,-0.17 -0.29,-0.48 -0.44,-0.72 -0.15,-0.24 -0.19,-0.32 -0.3,-0.47 -0.11,-0.15 -0.37,-0.51 -0.57,-0.76 -0.2,-0.25 -0.18,-0.25 -0.28,-0.37 -0.3,-0.36 -0.62,-0.72 -1,-1.06 L 42.62,35 A 10.08,10.08 0 0 1 59,42.81 Z" id="path66"/>
                                    <path d="m 48.92,16.85 a 6.66,6.66 0 1 0 6.65,6.65 6.65,6.65 0 0 0 -6.65,-6.65 z m 0,11.31 a 4.66,4.66 0 1 1 4.65,-4.66 4.66,4.66 0 0 1 -4.65,4.66 z" id="path68"/>
                                    <path d="m 8.43,23.5 a 6.65,6.65 0 1 0 6.65,-6.65 6.66,6.66 0 0 0 -6.65,6.65 z m 11.3,0 a 4.65,4.65 0 1 1 -4.65,-4.65 4.66,4.66 0 0 1 4.65,4.65 z" id="path70"/>
                                </g>
                            </svg>
                            <span class="pl-46">{{ $data['company_employees'] }}</span>
                        </h5>
                    </td>
                </tr>
                @foreach($data['participants'] as $participant)
                    <tr>
                        <td>
                            <img class="avatar" src="{{ $participant['avatar'] }}"/>
                        </td>
                        <td class="padding10">
                            <div>
                                <a href="#" class="gemcolor"><b>{{ $participant['first_name'] }} {{ $participant['last_name'] }}</b></a> @if ($participant['accepted'])<span class="green-dot">✔</span> @else <span class="red-dot">✕</span> @endif
                                <span class="ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="20x20" fill="currentColor" class="mercado-match absolute mt-2" width="20" height="20" focusable="false">
                                        <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
                                    </svg>
                                </span>
                            </div>
                            <p class="bold-and-gray">{{ $participant['title'] }}</p>
                            <small class="small-and-gray"><b>{{ $participant['meeting_number'] }}</b> Meeting | Met with {{ $participant['met_with'] }}</small>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </body>
</html>
