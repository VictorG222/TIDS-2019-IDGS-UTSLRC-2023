class ProbandoModel {
  List<CommonLocations>? commonLocation;

  ProbandoModel({this.commonLocation});

  factory ProbandoModel.fromMapJson(Map<String, dynamic> data) => ProbandoModel(
      commonLocation: data['data']['monsters']['common_locations'].map((data)=>CommonLocations.fromMapJson(data)).toList().cast<CommonLocations>());
}

class CommonLocations {
  String? nameLocation;
  CommonLocations({this.nameLocation});

  factory CommonLocations.fromMapJson(String data) =>
      CommonLocations(nameLocation: data);
}
