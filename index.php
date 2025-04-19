
  <!-- Navigation -->
<?php include("layout/header.php") ?>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Welcome to BrewBuzz</h1>
      <p>Discover top coffee blends and join our community of coffee lovers!</p>
      <a href="register.php" class="btn">Join Now</a>
    </div>
  </section>

  <!-- Featured Coffee Blends -->
  <section class="coffee-picks container">
    <h2>Top Coffee Picks</h2>
    <div class="coffee-grid">
      <div class="coffee-card">
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIALcAwwMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAUGBwj/xABFEAABAwICBQkFBQcEAQUBAAACAAEDBBIFEQYTISIyFDFBQlFSYXGBByNykaEVM2KSwSRDgrHR4fA0U2Oi8VVzg7LCFv/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACURAAICAgMBAAIBBQAAAAAAAAABAhEDIRIxQQQiMhRCUVJhcf/aAAwDAQACEQMRAD8A4nkhkrEqSxIen7gpjDobogGUB3hK4S8WfYup0PtQpqjDRo8SodZu2lbk7P6OsNh+HTy0doUxfxbEoNFakLpTL+EVz5JY3qTOvFhzdxRfzUui+LHcEfJ7vw5ZfJRK3Q+hALqWuui+JZOSeWnMoO6nI6ifU/f2/huS4SXUg5xf7RNRh1PhmGHdLFrCHhLnU3DaksWrxo6chGIi4fBYjl1SG6Ul3xLT+zmoE9J4Nb1s1MoOm3spZI3UVRI08bklZFRhu2jd5pUjU2LaPWmIjUxj1fBD2riQY8NvdVJgM0sU2/daSqMfxTJlOpNMYo8KH96puogiSa+vKnmIQ4VEbE7+qKv8iE4j0mq/Eo07DZuCpI1F/VTokPdTVidFdARKwB9xOxjF3VJYIrFopGTiZnEo1UEtNiUV4LOzDYaokbQQQQAEEGQTAJGiQQAaCJBAG2kwwpTEYt4iUiHCJ8HqYp62IbSU+V5aGYSii3h4RtTw02I6U3cqk5OMfCK58snVeHT88Fd1bF1WkuGUgWjbd3R2qpHSjlZ6qng+IiVUdFR4fWSjWlrLeEudVgVVlTLyXhL+S54/PCtbO2f25E90v+GsiwvB8ThKc5/f9ZZ7FMMgp/8ATycKYgup4Ss3blAklLrkS1hCSfejDLmjOO4q/wC42REr3Qmp5JpJRzmNwjJveuxUUb7++pcNVyf7rdIestmrVHInTs3ntSj1uKxVgfdEPyWUgqNVbYrerxD7Y0e96JFLH1ll4JrPdGs8S/GmXla5WiZixiZiSj00Qn1kqqa8BTVM9hrVIzbL6no9ziRStYnKaS8FAxIyBOhWOcoTwTXrOHUElxVRd5FBZoJwvhWcrA31YQ1f4lFq2vTJZWIJZCk5JiCRJWSGSBhIkp2RIACCCCAOkVWkU+PYldQU1sQj/wCVTV+LVMVSURyasvwpWIFU4ZvYUPuJB4hVfhVJLXVJFVCV3eWCxm7zuv8AY/8AYk8tMVZUSbvFvFtVa0sER7groeF4fgp4bLBWzlJLt93dtWFxLCf2whpRLVXbqcJ7oMmL8eQoyvhuCMrVWBTz1B7kZflVy+L/AGfR8mOmG7vWo6TSYgh1Woj/AAl0pSc/EVjjjdKUqIn2IQQ3Slaqs47DtU6uxOWoPiVbIZKoKX9ROZ47qBY4bVlF7q7dLiR4iIhvRcJKrB99W+D01ZidTyOioZqyXuwg5O3i+XM3i6pqtmV+EGOo6qnQCJrZ4f7GsfqzGWtnpcOiLqyHrJG9B2f9lpaH2R4LQ28v0iqJC62pAI2+tzp8kKmYOij3EzitNuXLsFJoTohFu8rqpPiqB/RmUufQTReoC3X1A/DM36s6OSCmebZwsNNCxLumI+xvCqi4qDG6iMu7MAm30ydZ7EPZLjmHgRUA0uI93VnYb+hbP+yXJBRzaGGc+GMk+EJGrLEXxPBD5LiNDNRl3Zgcc/J32P5s7qBCU/3pxyDAX7yx7fnlkjkx0iDNHYabtVjWRRBvay5Vzypp2JxoJ2RZI2K9HkqJEOkuycdkToARkglZIIA6XR4tg9Jo9ENRPdUiPCnsCxnB6uYRqLYRLdu5lCxXQ+lOs4ijIuqhT6GQGY0wz23dbsWdqm7N6kmlxJWNVNDgNZLPSiNRrB3d5UQ47LXHEPJLYu9bzotKsBiwSYYoq0qi3iHn2KS+mFNFg8VHT0MN4j94WSzVdrZq21cW6QdXRUtQG+KrD0bqZQIqKApBHitT9FpBFLMI1UF1xNbb2rQVOO12D7tLGIiQ8PTzJvK1qhRwRacuWjnE8ZU9TbKNpD1Ubjyg9wVZ4kEtXU8pqt3Wb26tp7JsJgxDHi1sAyRQxa07hzbnZmb1d/kzrRS1Zi4VKvAaBeyw8TCPE9ISkp8PLJ4qcdkkzdrv1Rf5v4bHffYlpPgeiNH9nYLSQx2/u4RZmz7XfpfxfanfaBjxYZhtsRWlJuiuOR0tTjExEZFaRbxdLrOc0tscMbk6SsvsY9oWK1xkIT6se7Hz/NUb12K13DrpP4nWswXRGmihGWUbi/EtPS0dNT26oRH+HNccvq/xR2x+Sv2Zz/D6DHOK0hH1Wto6PEwh3yK71WiFh6gpTTWdVSs+RjeHGvDO6zGKc7teVqucL0mrIrRrYy4rd3b5OlyVg9cUUNTEfAIkPWGQWdv7eiTy5ExrFia6NVDU0OMU2qqoIZothWkDE2bczuz9KkVtP+zEOrGSK3htbJ27GbmWaoo4Smuoy5PNd9yRbkngz9D+D9vOtPh9RrgKKUSEukS52ddOLNz7OTLi4PR530/psHlqZZ8KoZqKWMnaUbLQd89u70PzrEuC717ZMCH7HlxqlHejyGoEeuL7GJ/FndtvY/guEEy64s5n2N2o3dBE6oQESPJJQAaCCCANRjGk2IjWa3Wb1ql/bs+MQ01HhsEnLOsQlzv2qDhujtdVwyy1sBDF3rU5RCWjhlWUpXdW7nyWXFJUjfnJyuXRYBU8kppYK+AuXXWkRFnz+qp63DIN2UIyjEhufe6X6VHOq5RMVVUFvEV1xc7qdUSjqSvK3m3u3PoWTcl0dKUGtkCOmgw+pilqJxkt3rY1Pr8bixA9eJWyx7Le1lTStfvW3LR4Rot//Q6ocIpJiqbWvEdkUfiZvzeTZv4K9e9mTb2o6RQYhGUQDPrN2T93dtZdV9icQ0/KZTkEpayMREeyx32Z9r3fRXGAeybBaExqccIsRn/2yd2iZ/Lnf1+Ske0GoHBIcIrMNgjhipZDDVxiwtk7M+WTfC6rsxvsge1GhKUKaW26K5xLzyzb+SqMBoIoodae7cPEPQtxhmLYVpdhuqAh1pDvxlsJn7W8VRT4VPg/upRugHgk6Mux+x1xfVCXfh3fHkik16ODMNlofl+XzT0B9Yx/65f5zKNE1/Fbu/5z5I2Eogtit4rSuJ9g+Hjs5lx0deifrECL/wCqqtZOEwiHvIiJyIiyzBs2yZmZm7fopkfGhNkuIJQvTQx6rg4vRShiLr/3Tgxj/nZ/jrTkyOI0EctittF6mc8SKKWQpLQZrud9nNm/Sq1jIz1UUZSSllkPi/bktLgeF/ZUMk9UQ8pk3jLobwbwZLDByyJrpCzTjHG1Lt9EL2jSRhoVjOs4So5G9XZ2b6uy8vuu2aY4/BpZpJhuitFJdRzVQtVyCXGLbxMzt0ZM+1UulXsfrqG6fA5eURcWpmyYvJi5n9V7EdHkyOWZInZP1VNPSVJQVUEkM48Ucg5O3omlZAlmQyS3RIGIyQSkEAaSGtxOom5DX1pUsA8RF/bnSqEoKeaejGcagZOC4enoS9LaUjCCcIy+LwUPAanDIa+IjopJC5rbn4u1mWbpbRqrlplZW09ZynVHHdKXMIp6pp579VLGUOrBiMS6fJbaOno5QqazCreWSDujJnmGW12Z+h1A0S0crNK8YiGoIhw/jqpBLesZ9g+Du+z5uo5W9Gjg4rbuy00A0Wn0mOKsqqaOiwiErbhHeqHbnZvDtddkpo6XD6YaaggGGIeERHL/AMumxaKkhipaWIY4IxYAjHYzM2xmZkQNenRnbHryNUOntBy7RuWI+K5iEuwtuT+Wezyd1pIY0jGaLl2D1MHWKN7fNtrfyQhM81UtZWYZU62nkKGUS3ujJ252ddCwH2okADBjlNygeHWDsLLx7fVZTHcNLlJFb73reP8AdUJxEC0qzNOjuFLimjOLb1LW8nIuqRZfR9nyyUv7JI96lqaeQfiy+n91wJnIFKp8Vrqf7qpmH4TdlhL54Pw6I/RNenciwmsD9xd8Jj/VKjwms3f2Yvp/Vcch0yxyLgxCb82aefTzH/8A1CT6LP8AiRNP5kjsoYVWH1RH4jbL6Jz7Pgpwura2GMR6tzfzfLJcNn0wxyo48SqP4Tdv5KqqsSrKj/UTySfETumvlj6J/VJnda7TnRvAQIaWTlM//Htf58zei5rpX7RcTxu6Cn/Z6YuqJbX83WJIyNTsJoOV1IjKVo/V/DwW8YKK0c8ptu2br2LYQVXj0+JmN2pgIYvMnyd/lm3q67TFMUR2y/d9IksD7Nw5CFZU7scAiMMPRzbS9Ng/VauXSzDQfV1/D/uCOeXmzbfkm+xIZ0v0LwrSOj/aIN/LcmHYcfiz9ng68+aYaI4jotU21HvKOQvc1QjsfwfsfwXpzDsVo6m0aKSOaAuGSOVibN89jtzs+x9j9izuKFhmN8swyoEaimInDw82ftZ+luxCdB2eY0HV7pfo3PozjBUctxQFv083fDPp8W5n/uqQhVkjaCUgmBdQY3WU8JRU8dxcJSEGbt5Z8yRQ1VSUxV2ru1I7xZMxNn05JVTieIhTb1MUMVvcyVZTV1Vrv2e4iLdtFnfNn52y6VlwTNlNqjRFpSNJrZaK3X1Edh3BsYua7zyXT/ZFh/IdDxqS+9r5SlIvws7iLeWTO/q64XVRWHcUZRl1hIXb5Zr0JoGYnoThFnVpmH1bNn+uaaiktClJyey9zvNS6cVCj41OhdAEyNSAdRgdPC6kRzfTbANVXkUQ7sm8PqsDWYf3xXoKvpBq4Rv4hK4f1ZYLSfAhiqdy3eG7h+q0TM3E5PLQdxRTpCWyqsPs6qrpqSxUSZgqcu6m9SXdV1ONihyOgdkF4024KSbpgnQMTugpFHUFFMJAoqmUUdnvT/hSBnQsMrp6vVUNEVoiLD57NrutJT6IcoC6qnuXJoK2enm1tPIQkPWFaTDNPMRp7RqJNYP1Uu/ATXptp9GqOk/09wl3hLbkrPAsN1R7io8H0iHEzEbt5bigEQBS3Roq8Mb7WsCHENFZakB9/Qe+Aum1uNvlm/oy4VJSEEIyyyDGJDujdmT+nQvUmkgxHo9iAlw8mku8rXXla4ZQEpbpCt8mZEbB0TIYqAohfWSc3ijVfaP/ACflQV2KiZW4vU4gZXkREX+ZZKbWU/2fQRVNERQlsu723sVrDT0sW9FBGPwin5Y4qgLZREhLq86pRRDm2zHPVy1cwjVTkQkTXEW1dm9lVXqsNlwWokuKEilh8Qd83b0fb5LnwYPRhNcEasqaqnoamKqpS1c8ZMQF5dD+D8yHHQctnZhElKhJUejmPUuPUevp92Ud2oh6Yy5s/FvFXTN1gWZoiYBJ8CUGM0+BpATWNZ7Seuo4gEardIt0JOhn7H8H/mrm5YH2iDraa0+FNdky6IGJzxHvAs1WleqJsVrKH3VRdJF1S53bzZKfFxl4CFaGXYuoZQJUqasvUOWoQNBSOmSdIkmTDyEfCgofF99WMziFuqIS3W4ebN2Z3b0VVG1ifjNAmTIgllO2ISkIuERHN39EiRiA7TG0hWo9m+PUOD6QwcqpNYUxNEMxF91m+WbNl5bVa+2Ojwynx6KWgIdfNHfURjlkz8zO7NzO/wCin0KMNT1U9Od0UhCX4SW20Y0pxEzEZZCIVjcOoCrj1p7sA8RdvgzdLrZxBS0MI8McUI3GXj+r/qhoEaL2haS8k0MqRu9/VDqQ7dvO/wAs/ouBiRdRXeluOy4zX92CHdiH+b+b/wBFRM6Ixotseyl/wkaK9GqEbTIUJZtUBEXCI3EgJCfASIxEwIe9mPz2OmQQ6jGoADc4vomarFRKginEbbidvVudVRYHXX2xDrO7aXOzdOSlU1LTBRjS189t0udw5vq3yfw255M3qpL76RHwbHq7B8SGsopyjIS+bdLO3S3gu1aJaf4djYDFUENLWFxCRZRm/g78z+D/ADXBZ2EJiEOG7dSY5CA7gK1FDuj1iNp/hJLa4F580a9omMYOAwFJyilH9zNm7N5Pzj6OunYH7S8FxABGokKil7s28HobfqzKKKs3bEsvpjR8ooyIFe01ZBUBraeeOQeqUZsTfNkmpaKoAhNCE1ZwLEIrJiVTPBEfV/RdH0u0cliMp6cboutb0LC1FMtLMqoqih/EX5k28X4iU04iTTimBF1IpbCnHZJdkhhJQsiFr90FoMOwEjASliIiLvFaLejbX+iBlXRFKEwlTxFJP1el28Wb9VbUuFy1E2vryKSUt7V3Z5v4v0+TfNWJx0OHhbUTxj/xx7G9Wba/rmqnENKIot2iit/EXP8AL+qQF7JNBh8OtqCEbeG3o8GZY/HselrvdRe7gHq/q/a6q6zEJ6s7pZCJRUUASMUTsjBt9MZJ5LL3h/Mgp0c2GiDNyWY36Sv50amyuJMwWawJxqCLW3XFdzZNsbJ1YTVUURiMtw3cN308WWbpZiq6nVGVtwvvdjttZ38M2UwsMn+95WJFa5AI7c3y2bXTRDqyfjFPXRW1kU4xxENgje7O/S+xujJ2WcZ5aibVFcRFxbM32bdjeiOWoqT3ZdZd3dqnMMtFRwT2lGW2+SPi2vszz7WSSfpba6RIrisphGLDyji1TDdY75vnm7u+Wzo+SoclPvKzX2VUg9BEb5fy2sieiiKgKpKpEZSLdh6du3N3QgeyCjY7OAknJGI39ZUSTqPF6yhO6lnkjLvRm4v82Wow72l4/SbpVOuHuzAxfVtqxDoMlQ7Oq0/tXvC2vwunk+E3H6Pmky6VaIYgd1Vg1RGXWKGX+7LlqSlQWdNOq0Gl4PtOP8r/ANVHkfQvqVOI/lH+i53mhmnQtG7km0SDhjr5PiIWUc8X0ei/0+E3f+9Ln9FjM0GZAGsPS4Yv9FRUkPwhm6rKzSSuqN0p5Le6JWt9FSujzToB2SolPjJMsgyCADZ0YMkulxxSmFwjuoAOSIg406BDYIgO980iK2/3vCPOPb6qZHXxUl3Io7bu9kX1dkmNETVl/sF+V0atocHxaqiGeOPdka5t5kankXwIdJUXmMVPBH/8nA3i7Nz+ualxkIVhRS1OslIm94PNn0M3YoJ4eQGIhONpcJeHilHRVNDUxSmIyCJMW6Wx0/SO0XTVcHKSiqJLSEeK3PblzeSjVEtNiAFAQ70eZhbzG7N/mxMYlQSVFTrYiERLju6MulRmpCpzGXlI23W3Ezs/Ntdm7EWCWiTJi2tw2KA4/uye2TwfoyVZqJ6j3sUREJFst/kryeoGam3JJCEQ4hyEWy5+dlHp6Ss5Hykam3evERJn2+LfJJUinbFU2GkAEM5DcIMTiI5878zu/TzuqeOnOomIIN4Rz3uZsu1WtPIFQBfalTJH/wAceTZ+b/oos8o0+9RawR613T2bUJg0CLBp5Qu1sP8AEe30UOppzpztMbf1T/KiMOLeTTzkf4k02J0NWl1kjJTquGsiASqIyES3h8u1Qha89xVZLBmidSJaUg4rf4XRDbwiKLCiOlsSnT4RWQ0w1JRjqJOEhJn2sq90A1QEfxoC6c+96qACAbztS3pyBOTxwCA2jIPxfoncPp4Jd6qnKOL8POk3Q0rG6eITCXvDlxdjoVJ6rdDh7vR5p2pamC7k5F8RFzqJeUs2+knY5aHqBoDmuquEer2oVxRGe4Nqn4VNQ0kxS18WstF7B8eh3UKon5XMI94kvRr9R6PFaqMGARkybzQWpo9HaKWmjkLErHIc7dmxBTziXwmYx457y7w7eLozyUoqWp4SlHhubnQQVMyQoJ6owEQHWbrE9xM23m29vMoc0851F8+9J0beZBBV6Ms46AZYWlq6m2/92Iu/1UIyeJwiiqHeN9l2Ttl6I0FAxU9ONPPnJJrXubJrcmdvFHX4iVRYADaIjkI9DN2IIJoGNQhThUiEwlb1relS8Qgo2m1uHiTRfi2OggmCI1XiM9dq45erkDfNPPg8owuTSiJNzDt2+qCCUtdDST7IBQz8P/6QaAg3s95BBWjIHK5LLLyt7vQhDFrfzWoIJIpllWYOFPCJBLdd4ZKPRynQlrBEZGLdIC6UEEkVNJNUKnqYzuCGnaEbcnEnzbz2dKMqSKILSct4WL16EEESGiFJTSAdubKTDDYCCCpGbFSUwygm46G094kEECBJFNe/vB/z0QQQUUXbP//Z" alt="Espresso">
        <h3>Classic Espresso</h3>
        <p>Bold and rich, perfect for a quick caffeine kick.</p>
        <div class="star-rating" data-rating="4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
      <div class="coffee-card">
        <img src="s" alt="Latte">
        <h3>Creamy Latte</h3>
        <p>Smooth and frothy, a coffee lover's delight.</p>
        <div class="star-rating" data-rating="5">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>
      <div class="coffee-card">
        <img src="" alt="Cold Brew">
        <h3>Cold Brew</h3>
        <p>Refreshing and strong, ideal for warm days.</p>
        <div class="star-rating" data-rating="3">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
    </div><br><br>
    <button class="btn" id="openReviewModal">Submit a Review</button>
  </section>

  <!-- Review Modal -->
  <div class="modal" id="reviewModal">
    <div class="modal-content">
      <h3>Submit a Review</h3>
      <form id="reviewForm">
        <div class="form-group">
          <label for="coffee_name">Coffee Name</label>
          <input type="text" id="coffee_name" required>
        </div>
        <div class="form-group">
          <label>Rating</label>
          <div class="star-rating" id="reviewStars">
            <i class="fas fa-star" data-value="1"></i>
            <i class="fas fa-star" data-value="2"></i>
            <i class="fas fa-star" data-value="3"></i>
            <i class="fas fa-star" data-value="4"></i>
            <i class="fas fa-star" data-value="5"></i>
          </div>
          <input type="hidden" id="ratingInput" required>
        </div>
        <div class="form-group">
          <label for="comment">Comment</label>
          <textarea id="comment" required></textarea>
        </div>
        <p id="formError" class="error"></p>
        <button type="submit" class="btn">Submit</button>
        <button type="button" class="btn btn-secondary" id="closeModal">Cancel</button>
      </form>
    </div>
  </div>
  <!-- Footer -->
<?php include("layout/footer.php") ?>