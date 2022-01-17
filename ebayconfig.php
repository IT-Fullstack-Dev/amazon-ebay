<?php
/**
 * Configuration settings used by all of the examples.
 *
 * Specify your eBay application keys in the appropriate places.
 *
 * Be careful not to commit this file into an SCM repository.
 * You risk exposing your eBay application keys to more people than intended.
 */
return [
    'sandbox' => [
        'credentials' => [
            'devId' => '96d594f7-cbdf-434d-b1ed-42d5b1a26adc',
            'appId' => 'arsensah-myapp-SBX-31d9af83c-1e8d2298',
            'certId' => 'SBX-1d9af83c26dd-37f5-4f47-9ce5-3ef7',
        ],
        'authToken' => 'AgAAAA**AQAAAA**aAAAAA**2g5tYQ**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6AAloKnAZWBpgSdj6x9nY+seQ**d8oGAA**AAMAAA**p8LSKr2nZaQB6QoXNB8KVY32Y8UsCjUHi1GOKZWHrIXNCU+umAs1IucyDS7aMs0MS0QruQC5rmfzabXw6hwdwrGuLEvlbHTpJo5tAOtBe7m0rrdwThHLZhjC49ATfrflARnByXwjjIG1XnQFb4gPv2+ZzUMrnDjKyoV/I9ulb6ZKrRINd68GVY2YwKlMC2fKei5Zsvcmp4H7EMB93kso6I/OyLrcuQfCOMmcidI8ShMpihUXquEnjgwXDzvBMP/jaRANVi7Sx18iKPoxRBdykPU87XaGW+uv6ad8a8T7IUHHtW/AajOrsD63eO+6vOtFCZbG+GlR+ApyqC7+Q00puefV1rX+XVnnH8O0lAMKMQaXTTCJw7tuQC/X59Cte+Zkt0a9GQakVhpfk3zzxJmY21PnHsk0g0BRlVxOWZ59xeqqH1NAethxheYGjIR1Tbt2kT750SQRN2JSbzpWPxvqWvO0w86DLGT+dyGPT6tk4IAuVu4MdU+znT1R2YkK+E7QK/p2y1SSSrwNh+w9ELS/PqVOqlaf3EUWNkiPsHu64MqpKFK2glSEZBgg82pZ+cArQahITp6+so6S6/g5CcMZNgKB6Ln3O3tdBh5IpqrGtxzyLprnW61lBxo4ujEWbsLvpWvD/dN8zn8RiHcbDMqyknU48ANzvoPa4NaR45xrhroH023Vjwg8NIiTqHnQhoTOVeUQ7QGkHotKx2UVIbF1VClR89ekQLfcdSqyb0WwsV6rGwEmOWibGtiQTe9CN+67',
        'oauthUserToken' => 'YOUR_SANDBOX_OAUTH_USER_TOKEN',
        'ruName' => 'YOUR_SANDBOX_RUNAME'
    ],
    'production' => [
        'credentials' => [
            'devId' => '96d594f7-cbdf-434d-b1ed-42d5b1a26adc',
            'appId' => 'arsensah-myapp-PRD-41d9f5f51-f3aac787',
            'certId' => 'PRD-1d9f5f511ac9-005d-4560-8eee-672f',
        ],
        'authToken' => 'AgAAAA**AQAAAA**aAAAAA**2g5tYQ**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6AAloKnAZWBpgSdj6x9nY+seQ**d8oGAA**AAMAAA**p8LSKr2nZaQB6QoXNB8KVY32Y8UsCjUHi1GOKZWHrIXNCU+umAs1IucyDS7aMs0MS0QruQC5rmfzabXw6hwdwrGuLEvlbHTpJo5tAOtBe7m0rrdwThHLZhjC49ATfrflARnByXwjjIG1XnQFb4gPv2+ZzUMrnDjKyoV/I9ulb6ZKrRINd68GVY2YwKlMC2fKei5Zsvcmp4H7EMB93kso6I/OyLrcuQfCOMmcidI8ShMpihUXquEnjgwXDzvBMP/jaRANVi7Sx18iKPoxRBdykPU87XaGW+uv6ad8a8T7IUHHtW/AajOrsD63eO+6vOtFCZbG+GlR+ApyqC7+Q00puefV1rX+XVnnH8O0lAMKMQaXTTCJw7tuQC/X59Cte+Zkt0a9GQakVhpfk3zzxJmY21PnHsk0g0BRlVxOWZ59xeqqH1NAethxheYGjIR1Tbt2kT750SQRN2JSbzpWPxvqWvO0w86DLGT+dyGPT6tk4IAuVu4MdU+znT1R2YkK+E7QK/p2y1SSSrwNh+w9ELS/PqVOqlaf3EUWNkiPsHu64MqpKFK2glSEZBgg82pZ+cArQahITp6+so6S6/g5CcMZNgKB6Ln3O3tdBh5IpqrGtxzyLprnW61lBxo4ujEWbsLvpWvD/dN8zn8RiHcbDMqyknU48ANzvoPa4NaR45xrhroH023Vjwg8NIiTqHnQhoTOVeUQ7QGkHotKx2UVIbF1VClR89ekQLfcdSqyb0WwsV6rGwEmOWibGtiQTe9CN+67',
        'oauthUserToken' => 'v^1.1#i^1#I^3#r^0#p^1#f^0#t^H4sIAAAAAAAAAOVYe2wURRjvXR+KPNTEABIJ54KBQG5v9vaeC3fmaCmt9nH0rhVrkM7tzva27O2uO7O0Z4w2RYFAbPlHMJqQ8ocIESRoQIESNPEBiDEqImlDQoIPSjBEk4ImEN3dlnKthFcvsYn3z2W++eab3+833zczO6C9ZML8tRVrr0x23OfsbgftToeDmQgmlBQvmFLonFFcAHIcHN3tc9qLOgrPL8IwI2tcHcKaqmDkasvICuZsY4QydIVTIZYwp8AMwhzhuUSsuorz0oDTdJWovCpTrsqyCMWLPhaFQdALg0HIpAKmVbkeM6lGKJhieeAPegWR5VkErH6MDVSpYAIVEqG8wMu4QdgNQkkQ5HwBDgRpJuhvpFwNSMeSqpguNKCiNlzOHqvnYL01VIgx0okZhIpWxsoTtbHKsiU1yUWenFjRIR0SBBIDj2yVqgJyNUDZQLeeBtveXMLgeYQx5YkOzjAyKBe7DuYe4NtSh73hABS8jMCm2BDgYV6kLFf1DCS3xmFZJMEt2q4cUohEsrdT1FQj1YJ4MtSqMUNUlrmsv2UGlCVRQnqEWrI49mwsHqeiUMdIwTDtzmShprnjdWVuHyOERb/oZ9wiCyEfDAWHZhkMNaTxqGlKVUWQLMWwq0Yli5EJGY0Whs0RxnSqVWr1mEgsOLl+4WEBmUZrRQeX0CBpxVpUlDFVcNnN28s/PJoQXUoZBA1HGN1h62PWjKZJAjW6007EodxpwxEqTYjGeTytra10K0urerPHCwDjWV5dleDTKGOmh+1r1brpL91+gFuyqfDIHIkljmQ1E0ubmagmAKWZivp8fuC7vgojYUVHW/9lyOHsGVkO+SqPQErw+1mvN+RnWMAE/Pkoj+hQhnosHCgFs+4M1FchosmQR27ezDMjg3RJ4Fi/6GVDInILgbDo9oVF0Z3yCwE3IyIEEEql+HDof1Mld5rnCcTriOQr0fOT5FhDFUxLoG6Z55lgOh1PPF2Bn2JW47jQ1pjAS2MvLA+G5dbG2jrkA5E7LYWbki+VJVOZpDl//gSwaj0fIlSomCBhTPQSvKqhuCpLfHZ8LTCrC3Gok2wCybJpGBPJmKZV5m2jzg+9u9kj7o10Xk+n/+JkuikrbOXr+GJljcdmAKhJtHX20Lya8ajQvHRYJqvWV9qox8RbMi+s44q1SXKQrSQM3jRpmzKNV/O0jrBq6OYlm6617l5JdRVSzMOM6KosI72BGXMxZzIGgSkZjbeqzkOCS3CcnbRMgGVAKMgExsaLt8/RleNtS8rrPly08C5u056RH/bRAvvHdDj2gQ7HXqfDATzgCWY2eLyksL6ocNIMLBFES1CksdSsmN+rOqJXoawGJd1Z4middvCdwzlPCd0rwPThx4QJhczEnJcF8NiNnmLmwWmTvQwIgxAI+gIg2Ahm3+gtYqYWPbK7fl3Pybam92f2baijvr3AdD7ZHAWTh50cjuKCog5HweY9VRuvbe+qe3TSVxebN75xYv2CF+cfepfZN3fFmlkX9aayrYca1750xQAPHNscx6EtH2w6cnli1Hdp+qeHu/749eM1V98b6KvZkHj+m7lvbTo3B9df+PpE89l12+l5n39XjbKlxz/pmt1Q8WqsqWrmft9fH0YeSgfI4W0ne3ccefvsxfvxmb8Pnmpw8m9+dGD/vIrpG15b5+2fu3DXz8a2Fu2L/s7uvinJ9VN92c0DSvPOn1LJAKl2tPQ4Xt/98FSuasv8l8t/6zn+/Y6jKxMLn7t27HzPL3tfubTb6Yxd/czV21S/c6BzjdF/amlS3rUn3ldz+ceuA73Vf/b8cKa8d2v5ud+Pzvry9EDN/tP9g8v3D3MydtfkEQAA',
        'ruName' => 'YOUR_PRODUCTION_RUNAME'
    ]
];