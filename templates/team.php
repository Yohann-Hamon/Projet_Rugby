<table>
  <tr>
    <P><?=$a_team['world_rank']?></P>
    <div><img class="o-team__emblem" src="<?=$a_team['emblem']?>" alt="emblem"></div>
    <P><?=$a_team['country']?></P>
    <P><?=$a_team['pool']?></P>
  </tr>
</table>

<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }
  
  td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
  }
</style>

